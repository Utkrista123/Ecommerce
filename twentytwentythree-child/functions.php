<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Northern Trail DEMO</title>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="wp-content/themes/twentytwentythree-child/style.css" />
</head>

<body>
  <?php
  // Enqueue parent and child theme styles
  function twentytwentythree_child_enqueue_styles()
  {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'twentytwentythree_child_enqueue_styles');
  ?>
  <div id="page" class="page-home">
    <header>
      <div class="inner-header">
        <div class="container wide">
          <div class="wrap">
            <div class="header-left">
              <div class="list-inline">
                <ul>
                  <li>
                  <a href="#0" class="menu-trigger" trigger-button data-target="mobile-menu" ><i class="ri-menu-line"></i></a>
                  </li>
                  <li>
                    <a href=""><span class="itel-floating"></span><i class="ri-profile-line"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-center">
              <nav class="menu">
                <ul>
                  <li>
                    <a href="">
                      <span>WINTER</span>
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="sub-mega">
                      <li>
                        <div class="container">
                          <div class="wrapper">
                            <div class="mega-content">
                              <div class="dotgrid">
                                <div class="wrapper">
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper1.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper1.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Half Zipper | Turtle Neck | White
                                          and Olive Green</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.2600</span>
                                        <span class="current">Rs.2500</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Half Zipper | Turtle Neck | Melange
                                          Grey and Pink</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.2600</span>
                                        <span class="current">Rs.2500</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Half Zipper | Turtle Neck | Beige
                                          and Sky Blue</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.2600</span>
                                        <span class="current">Rs.2500</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper4.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper4.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Half Zipper | Turtle Neck | Maroon
                                          and Navy Blue</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.2600</span>
                                        <span class="current">Rs.2500</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper5.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/Winter halfzipper5.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Half Zipper | Turtle Neck | Melange
                                          Grey and Charcoal</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.2600</span>
                                        <span class="current">Rs.2500</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="links">
                                <div class="list-block">
                                  <h3 class="dot-title">Also</h3>
                                  <ul>
                                    <li><a href="#"></a>Joggers</li>
                                    <li><a href="#"></a>Summer Sweats</li>
                                    <li><a href="#"></a>Regular T-shirt</li>
                                    <li><a href="#"></a>Tank Top</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="">
                      <span>SUMMER</span>
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="sub-mega">
                      <li>
                        <div class="container">
                          <div class="wrapper">
                            <div class="mega-content">
                              <div class="dotgrid">
                                <div class="wrapper">
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/summer tshirt1.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/summer tshirt1.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Oversized T-shirt | Black</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.1099</span>
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/polo T.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/polo T.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Light Wt Polo T-Shirt | Mint</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.1199</span>
                                        <span class="current">Rs.1100</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/summer tshirt2.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/summer tshirt2.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Oversized T-shirt | Brown</a>
                                      </h2>
                                      <div class="product-price">
                                      <span class="before">Rs.1099</span>
                                      <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-1.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-1.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Summer Shorts | Black</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.1499</span>
                                        <span class="current">Rs.1400</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-2.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-2.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Summer Shorts | Off White</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.1499</span>
                                        <span class="current">Rs.1400</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-3.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/Summer Shorts-3.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="label">
                                        <span>-10%</span>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Summer Shorts | Beige</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="before">Rs.1499</span>
                                        <span class="current">Rs.1400</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="links">
                                <div class="list-block">
                                  <h3 class="dot-title">Also</h3>
                                  <ul>
                                    <li><a href="#"></a>Joggers</li>
                                    <li><a href="#"></a>Summer Sweats</li>
                                    <li><a href="#"></a>Regular T-shirt</li>
                                    <li><a href="#"></a>Tank Top</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="">
                      <span>SPORTS</span>
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="sub-mega">
                      <li>
                        <div class="container">
                          <div class="wrapper">
                            <div class="mega-content">
                              <div class="dotgrid">
                                <div class="wrapper">
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/SportsT1.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/SportsT1.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Sport T-shirt | Half Sleeve |
                                          Black</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsT2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsT2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Oversized T-shirt | Ultra-cool | Soft Aqua Green</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsT3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsT3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Oversized T-shirt | Ultra-cool | Pastel Blue</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS1.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS1.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Sport T-shirt | Sleeveless | Grey</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.800</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS2.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Sport T-shirt | Sleeveless | Coastal Blue</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.800</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img
                                          src="wp-content/themes/twentytwentythree-child/SportsS3.jpg"
                                          alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                      
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Sport T-shirt | Sleeveless | Black</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.800</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="links">
                                <div class="list-block">
                                  <h3 class="dot-title">Also</h3>
                                  <ul>
                                    <li><a href="#"></a>Joggers</li>
                                    <li><a href="#"></a>Summer Sweats</li>
                                    <li><a href="#"></a>Regular T-shirt</li>
                                    <li><a href="#"></a>Tank Top</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="">
                      <span>PRINT</span>
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="sub-mega">
                      <li>
                        <div class="container">
                          <div class="wrapper">
                            <div class="mega-content">
                              <div class="dotgrid">
                                <div class="wrapper">
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print1.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print1.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Made of Money | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print2.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print2.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Namaste Bitches | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print3.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print3.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Wise Doctor | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print4.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print4.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Space | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print5.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print5.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">
                                          Hang to the moon | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="dot-image">
                                      <a
                                        href=""
                                        class="product-permalink"></a>
                                      <div class="thumbnail">
                                        <img src="wp-content/themes/twentytwentythree-child/print6.jpg" alt="" />
                                      </div>
                                      <div class="thumbnail hover">
                                        <img src="wp-content/themes/twentytwentythree-child/print6.jpg" alt="" />
                                      </div>
                                      <div class="actions">
                                        <ul>
                                          <li>
                                            <a href=""><i class="ri-star-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i
                                                class="ri-arrow-left-right-line"></i></a>
                                          </li>
                                          <li>
                                            <a href=""><i class="ri-eye-line"></i></a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="dot-info">
                                      <h2 class="dot-title">
                                        <a href="">Sons of Anarchy | DTF Print</a>
                                      </h2>
                                      <div class="product-price">
                                        <span class="current">Rs.1000</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <div class="branding"><a href="">The Northern Trail</a></div>
            </div>
            <div class="header-right">
              <div class="list-inline">
                <ul>
                  <li>
                    <a href="#0" trigger-button data-target="search-float"><i class="ri-search-line"></i></a>
                  </li>
                  <li>
                    <a href=""><span class="item-floating">0</span><i class="ri-shirt-line"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="search-float" class="search-float">
          <div class="container wide">
            <form action="" class="search">
              <i class="ri-search-line"></i>
              <input
                type="search"
                class="input"
                id=""
                placeholder="Search products" />
              <i class="ri-close-line" close-button></i>
            </form>
          </div>
        </div>
      </div>
    </header>
    <main></main>
    <footer></footer>
  </div>
  <div class="overlay" data-overlay></div>
  <!-- mobile-menu -->
  <div id="mobile-menu" class="mobile-menu">
    <div class="wrap">
      <a href="" class="close-trigger" close-button>
        <i class="ri-close-line"></i>
      </a>
      <div class="main-menu scrollto">
        <nav class="wrapper">
          <ul>
            <li><a href=""><span>Home</span></a></li>
            <li class="has-child"><a href="">
              <span>Products</span>
              <span class="child-trigger"><i class="ri-arrow-down-s-line"></i></span>
            </a>
          <ul class="sub-menu list-block">
            <li><a href="#">Ultra-cool Edition Collection</a></li>
            <li><a href="#">Oversize T-shirt Collection</a></li>
            <li><a href="#">Polo Collection</a></li>
            <li><a href="#">Summer Shorts Collection</a></li>
            <li><a href="#">Joggers Collection</a></li>
            <li><a href="#">Summer Sweats Collection</a></li>
            <li><a href="#">Regular T-shirt Collection</a></li>
            <li><a href="#">Tank Top Collection</a></li>
            <li><a href="#">Half Zipper Collection</a></li>
            <li><a href="#">Cargo Trousers Collection</a></li>
            <li><a href="#">Sport T-shirt Collection</a></li>
            <li><a href="#">Dry-Fit Tracksuit</a></li>
            <li><a href="#">Style Spectrum Collection</a></li>
          </ul>
        </li>
            <li><a href=""><span>Discount</span></a></li>
            <li class="has-child">
            <a href="">
              <span>Specials</span>
              <span class="child-trigger"><i class="ri-arrow-down-s-line"></i></span>
            </a>
              <ul class="sub-menu list-block">
                <li><a href="#">Ultra-cool Edition Collection</a></li>
                <li><a href="#">Polo Prestige - A premium touch to classic polo shirts.</a></li>
                <li><a href="#">Stride Essentials - Joggers designed for every pace and purpose.</a></li>
                <li><a href="#">Sculpted Threads - Tank tops crafted for style and performance.</a></li>
                <li><a href="#">Elevate Half-Zip - Sleek and functional half-zip pullovers.</a></li>
                <li><a href="#">Adventure Utility Pants - Cargo trousers ready for every journey.</a></li>
                <li><a href="#">AeroFlex Tracksuit - Lightweight, dry-fit tracksuits for ultimate comfort.</a></li>
                <li><a href="#">Style Spectrum Elite - Short, modern, and impactful.</a></li>
              </ul>
            </li>
            <li><a href=""><span>Sale</span></a></li>
          </ul>
        </nav>
        <div class="button">
          <a href="" class="secondary-btn">Login</a>
          <a href="" class="primary-btn">Register</a>
        </div>
      </div>
    </div>
  </div>
  <script src="wp-content/themes/twentytwentythree-child/script.js"></script>
</body>
</html>