<?php
/**
 * Ukraine Sale Theme Functions
 */

// Функция для управления товарами
function ukraine_sale_get_products() {
    return array(
        'rest' => array(
            'title' => '🏖️ Rest & Pool',
            'icon' => '🏖️',
            'products' => array(
                array(
                    'name' => 'Beach Mat Pro',
                    'price' => '$25.49',
                    'original_price' => '$28.99',
                    'discount' => '-12%',
                    'emoji' => '🧵',
                    'desc' => 'Waterproof beach mat'
                ),
                array(
                    'name' => 'Swimming Mask Set',
                    'price' => '$39.99',
                    'original_price' => '$49.99',
                    'discount' => '-20%',
                    'emoji' => '🤿',
                    'desc' => 'Professional diving gear'
                ),
                array(
                    'name' => 'Water Ball Combo',
                    'price' => '$31.49',
                    'original_price' => '$39.99',
                    'discount' => '-21%',
                    'emoji' => '⚽',
                    'desc' => 'Colorful water balls'
                ),
                array(
                    'name' => 'Water Gun Pro Max',
                    'price' => '$33.74',
                    'original_price' => '$44.99',
                    'discount' => '-25%',
                    'emoji' => '💦',
                    'desc' => 'High pressure water blaster'
                ),
                array(
                    'name' => 'Pool Float Premium',
                    'price' => '$52.79',
                    'original_price' => '$65.99',
                    'discount' => '-20%',
                    'emoji' => '🏊',
                    'desc' => 'Inflatable pool lounger'
                ),
                array(
                    'name' => 'UV Beach Umbrella',
                    'price' => '$32.79',
                    'original_price' => '$41.99',
                    'discount' => '-22%',
                    'emoji' => '☂️',
                    'desc' => 'UV protection umbrella'
                ),
            )
        ),
        'fishing' => array(
            'title' => '🎣 Fishing',
            'icon' => '🎣',
            'products' => array(
                array(
                    'name' => 'Fishing Chair Deluxe',
                    'price' => '$70.19',
                    'original_price' => '$89.99',
                    'discount' => '-22%',
                    'emoji' => '🪑',
                    'desc' => 'Comfortable fishing seat'
                ),
                array(
                    'name' => 'Fishing Table',
                    'price' => '$47.99',
                    'original_price' => '$59.99',
                    'discount' => '-20%',
                    'emoji' => '📋',
                    'desc' => 'Portable tackle table'
                ),
                array(
                    'name' => 'Tackle Box Pro',
                    'price' => '$55.99',
                    'original_price' => '$69.99',
                    'discount' => '-20%',
                    'emoji' => '📦',
                    'desc' => 'Waterproof storage box'
                ),
                array(
                    'name' => 'Fishing Rod Set',
                    'price' => '$110.49',
                    'original_price' => '$149.99',
                    'discount' => '-26%',
                    'emoji' => '🎿',
                    'desc' => 'Carbon fiber rod set'
                ),
                array(
                    'name' => 'Fish Net Ultra',
                    'price' => '$35.99',
                    'original_price' => '$44.99',
                    'discount' => '-20%',
                    'emoji' => '🕸️',
                    'desc' => 'Heavy duty net'
                ),
                array(
                    'name' => 'Lure Collection',
                    'price' => '$37.49',
                    'original_price' => '$49.99',
                    'discount' => '-25%',
                    'emoji' => '🐟',
                    'desc' => '20 piece lure set'
                ),
            )
        ),
        'kids' => array(
            'title' => '🧸 Kids Seasonal',
            'icon' => '🧸',
            'products' => array(
                array(
                    'name' => 'Summer Surfboard',
                    'price' => '$36.97',
                    'original_price' => '$49.99',
                    'discount' => '-26%',
                    'emoji' => '🏄',
                    'desc' => 'Kids surfboard for summer'
                ),
                array(
                    'name' => 'Winter Roller Skates',
                    'price' => '$57.39',
                    'original_price' => '$79.99',
                    'discount' => '-28%',
                    'emoji' => '⛸️',
                    'desc' => 'Adjustable roller skates'
                ),
                array(
                    'name' => 'Spring Skateboard',
                    'price' => '$63.99',
                    'original_price' => '$89.99',
                    'discount' => '-29%',
                    'emoji' => '🛹',
                    'desc' => 'Pro skateboard deck'
                ),
                array(
                    'name' => 'Spring Kite',
                    'price' => '$21.99',
                    'original_price' => '$29.99',
                    'discount' => '-27%',
                    'emoji' => '🪁',
                    'desc' => 'Diamond kite set'
                ),
                array(
                    'name' => 'Building Block Set',
                    'price' => '$46.19',
                    'original_price' => '$65.99',
                    'discount' => '-30%',
                    'emoji' => '🧩',
                    'desc' => '1000 piece blocks'
                ),
                array(
                    'name' => 'Yo-Yo Pro',
                    'price' => '$17.99',
                    'original_price' => '$24.99',
                    'discount' => '-28%',
                    'emoji' => '⭕',
                    'desc' => 'Professional yo-yo'
                ),
            )
        ),
        'auto' => array(
            'title' => '🚗 Auto',
            'icon' => '🚗',
            'products' => array(
                array(
                    'name' => 'Magnetic Phone Mount',
                    'price' => '$20.87',
                    'original_price' => '$29.99',
                    'discount' => '-30%',
                    'emoji' => '📱',
                    'desc' => 'Dashboard mount holder'
                ),
                array(
                    'name' => 'Dash Cam 4K',
                    'price' => '$140.39',
                    'original_price' => '$199.99',
                    'discount' => '-30%',
                    'emoji' => '📹',
                    'desc' => 'Ultra HD dash camera'
                ),
                array(
                    'name' => 'Dual USB Car Charger',
                    'price' => '$21.24',
                    'original_price' => '$29.99',
                    'discount' => '-29%',
                    'emoji' => '🔌',
                    'desc' => 'Fast charging adapter'
                ),
                array(
                    'name' => 'Car Interior Cleaner',
                    'price' => '$27.99',
                    'original_price' => '$39.99',
                    'discount' => '-30%',
                    'emoji' => '🧹',
                    'desc' => 'Premium cleaning kit'
                ),
                array(
                    'name' => 'Air Purifier Filter',
                    'price' => '$40.99',
                    'original_price' => '$59.99',
                    'discount' => '-32%',
                    'emoji' => '💨',
                    'desc' => 'HEPA air filter'
                ),
                array(
                    'name' => 'LED Emergency Kit',
                    'price' => '$30.79',
                    'original_price' => '$43.99',
                    'discount' => '-30%',
                    'emoji' => '🚨',
                    'desc' => 'Safety & light kit'
                ),
            )
        )
    );
}

// Виконання для заголовків сторінок
add_filter( 'wp_title', 'ukraine_sale_wp_title' );
function ukraine_sale_wp_title( $title ) {
    return 'Ukraine Sale - Trending Products';
}

// Адмін меню
add_action( 'admin_menu', 'ukraine_sale_add_admin_menu' );
function ukraine_sale_add_admin_menu() {
    add_menu_page(
        'Ukraine Sale Settings',
        'Ukraine Sale',
        'manage_options',
        'ukraine_sale',
        'ukraine_sale_options_page',
        'dashicons-shopping-cart',
        25
    );
}

function ukraine_sale_options_page() {
    ?>
    <div class="wrap">
        <h1>Ukraine Sale Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'ukraine_sale_settings' ); ?>
            <table class="form-table">
                <tr>
                    <th><label for="ukraine_sale_hero_title">Hero Title</label></th>
                    <td>
                        <input type="text" name="ukraine_sale_hero_title" id="ukraine_sale_hero_title" 
                            value="<?php echo esc_attr( get_option( 'ukraine_sale_hero_title', 'Trending Products for Ukraine' ) ); ?>" 
                            class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th><label for="ukraine_sale_hero_subtitle">Hero Subtitle</label></th>
                    <td>
                        <input type="text" name="ukraine_sale_hero_subtitle" id="ukraine_sale_hero_subtitle" 
                            value="<?php echo esc_attr( get_option( 'ukraine_sale_hero_subtitle', 'Discover amazing deals on trending products' ) ); ?>" 
                            class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th><label for="ukraine_sale_enable_ads">Enable Google Ads</label></th>
                    <td>
                        <input type="checkbox" name="ukraine_sale_enable_ads" id="ukraine_sale_enable_ads" 
                            <?php checked( get_option( 'ukraine_sale_enable_ads' ), 'on' ); ?>>
                    </td>
                </tr>
                <tr>
                    <th><label for="ukraine_sale_ads_code">Google AdSense Code</label></th>
                    <td>
                        <textarea name="ukraine_sale_ads_code" id="ukraine_sale_ads_code" rows="5" class="large-text"><?php echo esc_textarea( get_option( 'ukraine_sale_ads_code' ) ); ?></textarea>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

add_action( 'admin_init', 'ukraine_sale_register_settings' );
function ukraine_sale_register_settings() {
    register_setting( 'ukraine_sale_settings', 'ukraine_sale_hero_title' );
    register_setting( 'ukraine_sale_settings', 'ukraine_sale_hero_subtitle' );
    register_setting( 'ukraine_sale_settings', 'ukraine_sale_enable_ads' );
    register_setting( 'ukraine_sale_settings', 'ukraine_sale_ads_code' );
}
