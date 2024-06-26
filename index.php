<?php
  session_start();
  $_SESSION['token'] = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wealth Builders Empire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <meta name="description" content="Discover financial success with Wealth Builders Empire, your trusted advisor for finances and term life insurance in Reno and Sparks Nevada. I, Matthew Smith offer expert guidance for wealth creation, investment strategies, life insurnace, retirement planning, and more. Let me help you build your financial empire today.">
  <meta name="keywords" content="term life insurance, life insurnace, universal life insurance, reno life insurance, insurance policy, term life insurance reno, estate planning, reno financial planners, directions to reno, wealth management reno, life insurnace reno, sparks financial advisors, wealth management, financial advisors near me, estate planning reno, investment strategies, retirement planning, financial planning, financial advisor reno, financial advisor sparks, financial advisor nevada">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link rel="stylesheet" href="./css/style.css">
  <script src="config.js"></script>
</head>
<body>
  <header class="header">
    <a class="header__logo-container" href="/">
      <img class="header__logo" src="./src/images/logo-main.png" alt="Wealth Builder's Empire company logo" loading="lazy">
    </a>
    <nav class="nav">
      <ul class="nav__list">
        <li class="nav__list-item"><a class="nav__list-link" href="#why-choose-us">Why Choose Us</a></li>
        <li class="nav__list-item"><a class="nav__list-link" href="#goals">Financial Goals</a></li>
        <li class="nav__list-item"><a class="nav__list-link" href="#appointment">Book Appointment</a></li>
        <li class="nav__list-item"><a class="nav__list-link" href="#knowledge">Knowledge</a></li>
        <li class="nav__list-item"><a class="nav__list-link" href="#about">About Me</a></li>
        <li class="nav__list-item"><a class="nav__list-link" href="#contact">Contact</a></li>
      </ul>
    </nav>

    <nav class="nav-mobile">
      <div class="nav-toggle js-nav-toggle">
        <div class="nav-toggle__button js-nav-button"></div>
      </div>
      <ul class="nav-mobile__list js-nav-list">
        <li class="nav-mobile__list-item"><a class="nav-mobile__list-link" href="#why-choose-us">Why Choose Us</a></li>
        <li class="nav-mobile__list-item"><a class="nav-mobile__list-link" href="#goals">Financial Goals</a></li>
        <li class="nav-mobile__list-item"><a class="nav-mobile__list-link" href="#appointment">Book Appointment</a></li>
        <li class="nav-mobile__list-item"><a class="nav-mobile__list-link" href="#about">About Me</a></li>
        <li class="nav-mobile__list-item"><a class="nav-mobile__list-link" href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <div class="hero">
      <div class="hero__video-container">
        <div class="hero__overlay"></div>
          <video class="hero__video" preload="metadata" autoplay muted loop playsinline>
            <source src="./src/videos/family.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      <div class="hero__content">
        <h1 class="hero__title">Your Financial Future Starts Here</h1>
        <p class="hero__subhead">Personalized term life insurnace, and financial plans to secure your finances and empower your dreams</p>
        <div class="hero__cta-group">
          <a href="#appointment" class="hero__cta">Get a FREE Term Life Insurance Consultation</a>
          <a href="#contact" class="hero__cta">Tell Me More</a>
        </div>
      </div>
    </div>

    <div class="why-choose-us js-section" id="why-choose-us">
      <h2 class="why-choose-us__title">Why Choose Us?</h2>
      <div class="why-choose-us__container">
        <div class="why-choose-us__section-container">

          <div class="text-media from-left js-text-media-animation">
            <div class="text-media__media">
              <div class="text-media__media-container">
                <img class="text-media__media-image" src="./src/images/pexels-anna-nekrashevich-6801872.webp" alt="Image of person">
              </div>
            </div>

            <div class="text-media__text">
                <h3 class="text-media__list-title">Personalized Approach</h3>
                <p class="text-media__list-body">I believe in a personalized approach to financial planning. I take the time to get to know you, your aspirations, and your current financial situation.</p>
                <p class="text-media__list-body"> This allows me to tailor a comprehensive financial plan that aligns with your unique needs and goals.</p>

            </div>
          </div>
        </div>


        <div class="why-choose-us__section-container--dark">

          <div class="text-media from-right flipped js-text-media-animation">
            <div class="text-media__media">
              <div class="text-media__media-container">
                <img class="text-media__media-image" src="./src/images/matthew-reyes--C-jTjc0g7I-unsplash.webp" alt="Man in business attire sitting at table looking at his phone">
              </div>  
            </div>

            <div class="text-media__text">

                <h3 class="text-media__list-title text-media__list-title--light">Customized Strategies</h3> 
                <p class="text-media__list-body text-media__list-body--light">There is no one-size-fits-all solution in financial planning.</p>
                <p class="text-media__list-body text-media__list-body--light">I craft customized strategies that adapt to your evolving needs and circumstances, ensuring that your financial plan remains relevant and effective over time.</p>
       
            </div>
          </div>
        </div>

        <div class="why-choose-us__section-container">

          <div class="text-media from-left js-text-media-animation">
            <div class="text-media__media">
              <div class="text-media__media-container">
                <img class="text-media__media-image" src="./src/images/people-working-their-office.webp" alt="Two people looking at a document on a clip board in an office">
              </div>
            </div>

            <div class="text-media__text">
                <h3 class="text-media__list-title">Peace of Mind</h3>
                <p class="text-media__list-body">Navigating the complex world of finance can be overwhelming.</p>
                <p class="text-media__list-body">Our team is here to provide you with the peace of mind that comes from having a solid financial plan in place. You can rest easy knowing that your financial future is in capable hands.</p>
            </div>
          </div>
        </div>
          
        <div class="why-choose-us__section-container--dark">
          <div class="text-media from-right flipped js-text-media-animation">
            <div class="text-media__media">
              <div class="text-media__media-container">
                <img class="text-media__media-image" src="./src/images/AdobeStock_642464666 Large.webp" alt="Man standing in front of a building weaing a suit, looking at the buildings">
              </div>
            </div>

            <div class="text-media__text">
              <h3 class="text-media__list-title text-media__list-title--light">More Than Money</h3> 
              <p class="text-media__list-body text-media__list-body--light">Financial planning isn't just about money; it's about dreams, aspirations, and the life you want to lead.</p>
              <p class="text-media__list-body text-media__list-body--light">I'm not just a financial advisor; I'm a partner dedicated to helping you design the life you've always envisioned.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="goals" id="goals">
      <div class="goals__background"></div>
      <div class="goals-container">
        <h2 class="goals__title">Helping You Achieve Your Financial Goals</h2>
        <div class="goals-content">

          <div class="goals-cards">

            <div class="goals-cards__card">
              <div class="goals-cards__media">
                <img src="./src/icons/shield-halved-solid.svg" alt="Icon of a shield" class="goals-cards__card-image" loading="lazy">
              </div>
              <div class="goals-cards__content">
                <h3 class="goals-cards__card-title">Protecting What Matters</h3>
                <p class="goals-cards__card-body">Life is unpredictable, but your finances don't have to be. From term life insurance to estate planning, let's safeguard your family's future, no matter what life brings.</p>
              </div>
            </div>
            <div class="goals-cards__card">
              <div class="goals-cards__media">
                <img src="./src/icons/file-invoice-dollar-solid.svg" alt="Icon of a dollar sign on a sheet of paper" class="goals-cards__card-image" loading="lazy">
              </div>
              <div class="goals-cards__content">
                <h3 class="goals-cards__card-title">Tax Strategy</h3>
                <p class="goals-cards__card-body">From deductions to investments, I unlock the secrets of the tax code and build a proactive strategy that protects your assets and fuels your wealth for years to come.</p>
              </div>
            </div>
            <div class="goals-cards__card">
              <div class="goals-cards__media">
                <img src="./src/icons/house-chimney-solid.svg" alt="Icon of a house" class="goals-cards__card-image" loading="lazy">
              </div>
              <div class="goals-cards__content">
                <h3 class="goals-cards__card-title">Estate Planning</h3>
                <p class="goals-cards__card-body">Leave a lasting legacy. Our comprehensive estate planning and term life insurance services ensure your values, assets, and love reach the ones who matter most, exactly as you envision.</p>
              </div>
            </div>
            <div class="goals-cards__card">
              <div class="goals-cards__media">
                <img src="./src/icons/circle-dollar-to-slot-solid.svg" alt="Icon of a coin" class="goals-cards__card-image" loading="lazy">
              </div>
              <div class="goals-cards__content">
                <h3 class="goals-cards__card-title">Wealth Strategies</h3>
                <p class="goals-cards__card-body">From investments to insurance, I partner with you to craft a tailor-made plan that minimizes risk, maximizes your earning potential, and secures your financial future for generations to come.</p>
              </div>
            </div>

            <div class="goals-cards__card">
            <div class="goals-cards__media">
              <img src="./src/icons/graduation-cap-solid.svg" alt="Icon of a graduation cap" class="goals-cards__card-image" loading="lazy">
              </div>
              <h3 class="goals-cards__card-title">Invest in Future Scholars</h3>
              <p class="goals-cards__card-body">Investing in education is investing in tomorrow. Let's craft a plan to save for your children's education, ensuring they have the tools they need to succeed.</p>
            </div>

            <div class="goals-cards__card">
            <div class="goals-cards__media">
              <img src="./src/icons/hand-holding-dollar-solid.svg" alt="Icon of a hand holding a dollar sign" class="goals-cards__card-image" loading="lazy">
              </div>
              <h3 class="goals-cards__card-title">Embrace Retirement Freedom</h3>
              <p class="goals-cards__card-body">Picture a retirement filled with possibilities. Together, we'll design a strategy that ensures your golden years are worry-free. Let's build the nest egg you deserve.</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="insta" id="knowledge">
      <div class="insta-container">
        <h2 class="insta__title">Financial Insights</h2>
        <h2 class="insta__subhead">Stay informed with some of my latest FREE financial knowledge</h2>
        <div class="insta-feed js-ig-feed">

        </div>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="contact__background"></div>
      <div class="contact-container">
        <div class="contact-form-container">
          <h2 class="contact__title">I'd love to hear from you!</h2>
          <!-- <ul class="contact__body">
            <li class="contact__body-item">Want to make your money work smarter to reach your financial goals.</li>
            <li class="contact__body-item">Need clarity on your goals and want a roadmap to achieve them.</li>
            <li class="contact__body-item">Are looking for a solid financial strategy for a worry-free retirement</li>
          </ul> -->
          <form method="post" action="/contact-success/" class="contact-form">
            <label for="first-name" class="contact-form__label">First Name</label>
            <input class="contact-form__input" id="first-name" name="first-name" type="text" required>

            <label for="last-name" class="contact-form__label">Last Name</label>
            <input class="contact-form__input" id="last-name" name="last-name" type="text" required>

            <label for="email" class="contact-form__label">Contact Email</label>
            <input class="contact-form__input" id="email" name="email" type="text" required>

            <label for="contact-phone" class="contact-form__label">Contact Phone</label>
            <input class="contact-form__input" id="contact-phone" name="contact-phone" type="text">

            <label for="message" class="contact-form__label">Message</label>
            <textarea class="contact-form__textbox" name="message" id="message" cols="30" rows="10" required></textarea>

            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">

            <button class="contact-form__submit">Send</button>
          </form>
        </div>

        <div class="booking-container" id="appointment">
          <h2 class="booking__title">Ready to Talk Finance? Reserve Your Consultation</h2>
        </div>
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/mattsmithinc33" style="min-width:320px;height:700px;"></div>
        <!-- Calendly inline widget end -->
      </div>

    </div>

    <div class="about" id="about">
      <div class="about-container">
        <div class="about-content">
          <div class="about__media">
          <h2 class="about__title">Meet Matt Smith</h2>
            <div class="about__image-container">
              <img class="about__image"src="./src/images/profile-pic.webp" alt="Matthew Smith, Wealth Builders Empire" class="about__media-image" loading="lazy">
            </div>
          </div>

          <div class="about__text">
            <p class="about__body">I'm Matthew Smith, a financial advisor in Reno NV with a passion for helping people achieve their financial dreams. I believe that everyone deserves a secure financial future, and I'm dedicated to providing the guidance and support you need to make that a reality.</p>
            <p class="about__body">I am a professional in the financial industry, and I've helped countless individuals and families build a solid financial foundation, grow their wealth, and plan for a comfortable retirement. I'm committed to staying up-to-date on the latest financial trends and strategies, so you can trust that you're getting the most relevant and effective advice.</p>
            <p class="about__body">I'm here to be your partner in financial success. Whether you're just starting out on your financial journey or you're looking to take your wealth to the next level, I'm here to help. Let's work together to build your financial empire.</p>
          </div>
      </div>
    </div>

    <div class="newsletter">
      <div class=newsletter__background></div>
      <div class="content">
        <h2 class="newsletter__title">Sign up for free wealth knowledge!</h2>
      </div>
      <!-- Mailchimp newletter embed--->
      <div id="mc_embed_shell">
        <div id="mc_embed_signup">
          <form action="https://gmail.us8.list-manage.com/subscribe/post?u=8458a0d720d38c5e98e3b51e8&amp;id=8dd2f17644&amp;f_id=00da0ee0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form" target="_self" novalidate="">
            <div id="mc_embed_signup_scroll">
              <div class="newsletter-row"> <!-- custom element -->
                <div class="newsletter-group"> <!-- custom element -->
                  <div class="mc-field-group">
                    <label for="mce-EMAIL"></label>
                    <!-- input contains custom class name -->
                    <input type="email" name="EMAIL" class="required email newsletter-form__input" id="mce-EMAIL" required="" value="">
                    <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                  </div>
                  <div hidden=""><input type="hidden" name="tags" value="5202197"></div>
                  <div id="mce-responses" class="clear foot">
                    <div class="response" id="mce-error-response" style="display: none;"></div>
                    <div class="response" id="mce-success-response" style="display: none;"></div>
                  </div>
                  <div aria-hidden="true" style="position: absolute; left: -5000px;">
                    /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                    <input type="text" name="b_8458a0d720d38c5e98e3b51e8_8dd2f17644" tabindex="-1" value="">
                  </div>
                  <div class="optionalParent"></div>
                </div>

                <div class="newsletter-group"> <!-- custom element -->
                  <div class="clear foot">
                    <!-- input for submit button contains custom class name -->
                    <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button newsletter-form__button" value="Subscribe!">
                    <p style="margin: 0px auto;">
                      <a href="http://eepurl.com/iMHb8k" title="Mailchimp - email marketing made easy and fun">
                        <span style="display: inline-block; background-color: transparent; border-radius: 4px;">
                        <img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 1px; height: 40px; display: flex; padding: 20px 0px; justify-content: center; align-items: center;">
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-column">
        <div class="footer__logo-container">
          <img src="./src/images/logo-main.png" alt="Wealth Builder's Empire logo" class="footer__logo" loading="lazy">
        </div>
      </div>
      <div class="footer-column">
        <ul class="footer-links">
          <li class="footer-links__item"><a href="#about">About</a></li>
          <li class="footer-links__item"><a href="#goals">Financial Goals</a></li>
          <li class="footer-links__item"><a href="#appointment">Book Appointment</a></li>
          <li class="footer-links__item"><a href="#knowledge">Knowledge</a></li>
          <li class="footer-links__item"><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <ul class="footer-contact">
          <li class="footer-contact__item"> 
            <a href="tel:7753543932">
              <img src="src/icons/phone-solid.svg" alt="Icon of a phone" class="footer-contact__item-image">
            </a>
          </li>

          <li class="footer-contact__item">
            <a href="mailto:mattsmithinc33@gmail.com">
              <img src="src/icons/envelope-regular.svg" alt="Email Icon" class="footer-contact__item-image">
            </a>
          </li>

          <li class="footer-contact__item">
            <a href="https://www.instagram.com/forbidden_knowledge33/" target="_blank">
              <img src="src/icons/instagram.svg" alt="Instagram Icon" class="footer-contact__item-image">
            </a>
          </li>
        </ul>
      </div>
    </div>  
    <div class="footer-legal">
      <p class="footer-legal__item">&copy; <?php echo date('Y'); ?> Wealth Builders Empire</p>
      <a class="footer-legal__item" href="/privacy/" target="_blank">Privacy Policy</a>
      <a class="footer-legal__item" href="/terms-and-conditions/" target="_blank">Terms & Conditions</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
  <script type="module" src="./src/scripts/scripts.js"></script>
</body>
</html>
