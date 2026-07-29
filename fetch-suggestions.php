<?php
$search_query = isset($_GET['query']) ? trim($_GET['query']) : '';
$suggestions = [];

if (!empty($search_query) && strlen($search_query) >= 2) { // 2 ya usse zyada characters par chalega
    $all_files = glob("*.php");
    $ignored_files = ['header.php', 'footer.php', 'search.php', 'fetch-suggestions.php'];

    foreach ($all_files as $file) {
        if (!in_array($file, $ignored_files) && file_exists($file)) {
            $file_content = file_get_contents($file);
            
            // Clean HTML tags to read plain text
            $clean_text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $file_content);
            $clean_text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $clean_text);
            $clean_text = strip_tags($clean_text);
            $clean_text = preg_replace('/\s+/', ' ', $clean_text);

            // Agar text match hota hai, toh file ka naam ya title suggestion me daalenge
            if (stripos($clean_text, $search_query) !== false) {
                $page_title = ucfirst(str_replace('.php', '', $file));
                if (preg_match('/<title>(.*?)<\/title>/is', $file_content, $matches)) {
                    $page_title = trim($matches[1]);
                }
                
                // Duplicate entries hatane ke liye check
                if (!in_array($page_title, array_column($suggestions, 'title'))) {
                    $suggestions[] = [
                        'title' => $page_title,
                        'file'  => $file
                    ];
                }
            }
        }
    }
}

// JSON format me output return karenge taaki JS ise read kar sake
header('Content-Type: application/json');
echo json_encode(array_slice($suggestions, 0, 5)); // Top 5 suggestions hi dikhayenge
?>