<?php
// =========================================================================
// 1. BACKEND LOGIC: AJAX LIVE DROPDOWN RESULTS (TOP ON EVERY ROUTE)
// =========================================================================
$search_query = isset($_GET['query']) ? trim($_GET['query']) : '';
$suggestions = [];

if (isset($_GET['action']) && $_GET['action'] === 'suggest') {
    header('Content-Type: application/json');
    if (!empty($search_query) && strlen($search_query) >= 2) {
        $all_files = glob("*.php");
        $ignored_files = ['header.php', 'footer.php', 'search.php'];

        foreach ($all_files as $file) {
            if (!in_array($file, $ignored_files) && file_exists($file)) {
                $file_content = file_get_contents($file);
                
                $clean_text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $file_content);
                $clean_text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $clean_text);
                $clean_text = strip_tags($clean_text);
                $clean_text = preg_replace('/\s+/', ' ', $clean_text);

                if (stripos($clean_text, $search_query) !== false) {
                    $page_title = ucfirst(str_replace('.php', '', $file));
                    if (preg_match('/<title>(.*?)<\/title>/is', $file_content, $matches)) {
                        $page_title = trim($matches[1]);
                    }

                    $pos = stripos($clean_text, $search_query);
                    $start = ($pos - 30 < 0) ? 0 : $pos - 30;
                    $snippet = substr($clean_text, $start, 80);
                    
                    if (!in_array($page_title, array_column($suggestions, 'title'))) {
                        $suggestions[] = [
                            'title' => $page_title,
                            'url'   => $file,
                            'desc'  => trim($snippet) . "..."
                        ];
                    }
                }
            }
        }
    }
    echo json_encode(array_slice($suggestions, 0, 5));
    exit; 
}

// Main Results page backend logic
$results = [];
if (!empty($search_query)) {
    $all_files = glob("*.php");
    $ignored_files = ['header.php', 'footer.php', 'search.php'];

    foreach ($all_files as $file) {
        if (!in_array($file, $ignored_files) && file_exists($file)) {
            $file_content = file_get_contents($file);
            
            $clean_text = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $file_content);
            $clean_text = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $clean_text);
            $clean_text = strip_tags($clean_text);
            $clean_text = preg_replace('/\s+/', ' ', $clean_text);

            if (stripos($clean_text, $search_query) !== false) {
                $page_title = ucfirst(str_replace('.php', '', $file));
                if (preg_match('/<title>(.*?)<\/title>/is', $file_content, $matches)) {
                    $page_title = trim($matches[1]);
                }

                $pos = stripos($clean_text, $search_query);
                $start = ($pos - 70 < 0) ? 0 : $pos - 70;
                $snippet = substr($clean_text, $start, 180);

                $results[] = [
                    'title' => $page_title,
                    'url'   => $file,
                    'text'  => "..." . trim($snippet) . "..."
                ];
            }
        }
    }
}

include('header.php'); 
?>

<div class="search-results-wrapper" style="padding: 120px 0 80px 0; background-color: #fcfcfc; min-height: 600px; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                
                <div class="section-heading mb-4">
                    <h2 style="font-size: 32px; color: #111; font-weight: 700; margin-bottom: 10px;">
                        Search Results for: <span style="color: #bf9456;">"<?php echo htmlspecialchars($search_query); ?>"</span>
                    </h2>
                    <p style="color: #666; font-size: 15px;"><?php echo count($results); ?> pages found.</p>
                </div>
                
                <hr style="border-top: 1px solid #eee; margin-bottom: 40px;">

                <?php if (!empty($results)): ?>
                    <div class="results-list">
                        <?php foreach ($results as $result): ?>
                            <div class="search-result-card" style="background: #fff; padding: 25px; margin-bottom: 20px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); border-left: 4px solid #bf9456;">
                                <h3 style="font-size: 20px; margin-bottom: 10px; font-weight: 600;">
                                    <a href="<?php echo $result['url']; ?>" style="color: #111; text-decoration: none;">
                                        <?php echo $result['title']; ?>
                                    </a>
                                </h3>
                                <p style="color: #555; font-size: 14px; line-height: 1.6; margin-bottom: 12px; background: #fafafa; padding: 12px; border-radius: 4px;">
                                    <?php echo htmlspecialchars($result['text']); ?>
                                </p>
                                <a href="<?php echo $result['url']; ?>" style="color: #bf9456; font-weight: 600; text-decoration: none; text-transform: uppercase; font-size: 12px;">
                                    Explore Page <i class="fa-solid fa-arrow-right-long" style="margin-left: 8px;"></i>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="no-results-found text-center" style="padding: 60px 0;">
                        <h4 style="color: #333; margin-bottom: 8px; font-weight: 700;">No Matches Found</h4>
                        <p style="color: #777;">We couldn't find any page matching your keywords.</p>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>