<?php get_header(); ?>

    <!-- Jumbotron -->
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="white-text-img">
            <h1 class="text-uppercase">
              <strong>Profitable Goat Raising for Every Juan</strong>
            </h1>
            </div>
            <hr class="separator">
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <!-- About -->
    <section class="bg-primary" id="about">
      <div class="container-fluid">
        <div class="row row-card">
          <div class="col-lg-5 mx-auto text-center">
            <img id="about-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
            <br />
            <table class="text-table text-left">
              <tbody>
                <tr>
                  <td>Company Name:</td>
                  <td>Don Chicho&#39;s Nurture Farm</td>
                </tr>
                <tr>
                  <td>SEC Registration No.:</td>
                  <td>CS201800961</td>
                </tr>
                <tr>
                  <td>Company TIN No.:</td>
                  <td>009-954-069-000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-6 mx-auto text-center">
            <h2 class="section-heading">About the Farm</h2>
            <hr class="my-4">
            <p class="text-justified mb-4">
              Don Chicho’s Nurture Farm, an accredited subfarm of DV Boer Inc., is located 
              in Sta. Maria, Bulacan. The rich and luscious land of the farm will serve as a
              pasture site for the Boer goats. The farm aims to efficiently and 
              effectively raise and produce goat livestock and products, not 
              only ensuring the highest profit possible, but also providing 
              employment to the local farmers in the community.
              <br /><br />
              Much like DV Boer, the farm also offers the Pa-iwi Package, giving everyone a chance to contribute to the farm’s development and goals, all while producing profit for both the investor and the farm.
            </p>
          </div>
        </div>
        <div class="row row-card">
          <div class="col-lg-4 mx-auto text-left">
            <h2 class="section-heading text-center">Our Mission</h2>
            <hr class="my-4">
            <p class="text-justified mb-4">
                We exist to contribute the country’s food security and agricultural development through sustainable and profitable farming practices as well as mutually beneficial partnerships.
            </p>
          </div>

          <div class="col-lg-4 mx-auto text-center">
            <h2 class="section-heading">Our Vision</h2>
            <hr class="my-4">
            <p class="mb-4">
              To be a leading, modern, innovative and successful agricultural enterprise.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Paiwi Section -->
    <section id="paiwi">
      <div class="container">
        <div class="row row-card">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">The Paiwi System</h2>
            <hr class="my-4">
            <p class="text-muted mb-4">
                In the Pa-iwi or Paalaga System, the owner of livestock would put in trust a cow / goat to a farmer or trusted individual to take care of the livestock. Profits from the offspring would be shared between the owner and the farmer.
            </p>
            <hr class="separator">
            <img id="paiwi-img" src="<?php echo get_template_directory_uri(); ?>/img/paiwi-cycle.png">
          </div>
        </div>
        <br />
        <div class="row row-card">
          <div class="col-lg-4 text-center">
            <h3>Stage 1: Payment</h3>
            <div class="badge-small">
              <img src="<?php echo get_template_directory_uri(); ?>/img/badge-1.png" />
            </div>
            <hr>
            <table class="table text-muted">
              <tbody>
                <tr>
                  <th>Payment</th>
                  <th>Cost</th>
                </tr>
                <tr>
                  <td>Contract signing</td>
                  <td>Php 160,000.00</td>
                </tr>
                <tr>
                  <td>1 Month after</td>
                  <td>Php 80,000.00</td>
                </tr>
                <tr>
                  <td>2 Months after</td>
                  <td>Php 80,000.00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-4 text-center">
            <h3>Stage 2: Payout</h3>
            <div class="badge-small">
              <img src="<?php echo get_template_directory_uri(); ?>/img/badge-2.png" />
            </div>
            <hr>
            <table class="table text-muted">
              <tbody>
                <tr>
                  <th>Payout</th>
                  <th>Revenue</th>
                  <th>Month</th>
                </tr>
                <tr>
                  <td>1st Payout</td>
                  <td>Php 90,000.00</td>
                  <td>11th</td>
                </tr>
                <tr>
                  <td>2nd Payout</td>
                  <td>Php 135,000.00</td>
                  <td>19th</td>
                </tr>
                <tr>
                  <td>3rd Payout</td>
                  <td>Php 135,000.00</td>
                  <td>27th</td>
                </tr>
                <tr>
                  <td>4th Payout</td>
                  <td>Php 135,000.00</td>
                  <td>35th</td>
                </tr>
                <tr>
                  <td>End of Contract (assets)</td>
                  <td>Php 150,000.00</td>
                  <td>35th / End</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-4 text-center">
            <h3>Stage 3: Profit</h3>
            <div class="badge-small">
              <img src="<?php echo get_template_directory_uri(); ?>/img/badge-3.png" />
            </div>
            <hr>
            <table class="table text-muted">
              <tbody>
                <tr>
                  <td>Total Cost:</td>
                  <td>Php 320,000.00</td>
                </tr>
                <tr>
                  <td>Total Revenue:</td>
                  <td>Php 645,000.00</td>
                </tr>
                <tr>
                  <td>Total Profit:</td>
                  <td>Php 325,000.00</td>
                </tr>
                <tr>
                  <td>Return of Investment:</td>
                  <td>102 % over 3 years</td>
                </tr>
              </tbody>
              </table>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white" id="faq">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">FAQ</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <p>
                    1. What is paiwi?<br />
                    Paiwi is a Filipino term for “paalaga” or “to be taken care of” in English.
                    <br /><br />
                    2. How does the Paiwi Program works?<br />
                    The paiwi program works when a potential paiwi partner (the client) avails of a Paiwi 
                      package worth 320,000 PHP for 30 heads of female goats (does) from Don Chicho's Nurture 
                      farm, who will manage ALL the farming which covers housing, breeding, managing and selling 
                      the goats. If the goat dies or got stolen, they will be replaced as part of the farm’s 
                      responsibility to secure your investment and deliver your profits on time as stated in the 
                      contract.
                    <br /><br />
                    3. Who can be a partner?<br />
                    Anyone<br />
                    </p>
                </div>
                <div class="carousel-item">
                  <p>
                      4. Can a partner avail more than 1 Paiwi package?<br />
                      Yes.
                      <br /><br />
                      5. How much profit can a partner expect to receive?<br />
                      Around 33% per year.
                      <br /><br />
                      6. What are the risks of the business? Is the profit or payout assured?<br />
                      In case of loss, the goats will be replaced as part of the farm’s accountability; 
                        and payouts for partners will be fulfilled as per the contract. Don Chicho's Nurture 
                        Farm ensures that proactive measures are in place to minimize the loss of goats. 
                        We construct sturdy goat houses, provide extensive &amp; continuous training to our farm 
                        workers, collaborate with other sub farms nationwide and observe strict adherence to 
                        DV Boer’s standard of breeding, maintaining and safekeeping the livestock. 
                      <br />
                  </p>
                </div>
                <div class="carousel-item">
                  <p>
                      7. How can a paiwi partner gain profit from the paiwi program?<br />
                      On the 11th month from the start of contract, your 30 heads of does have already 
                      given birth to 30 baby goats (kids). We’ll buy each kid for Php 3,000 each or Php 90,000 
                      in total for your first payout. The next 8 months will be another period of conception for 
                      your 30 does which normally give multiple births after their first conception. This time we 
                      expect 45 kids which we will pay for P 135,000 for your 2nd payout. The same thing happens 
                      for your 3rd and 4th payouts as summarized in the diagram above.
                      <br /><br />
                      8. What happens at the end of the 35-month contract?<br />
                      You have 2 options:<br />
                      a. You can get your initial 30 female goats from us or, b. We can buy the initial 30 female goats for 150, 000 PHP (salvage value)
                  </p>
                </div>
                <div class="carousel-item">
                  <p>
                      9. How much is my total profit?<br />
                      645, 000 PHP (total payouts + salvage value)
                      <br /><br />
                      10. How much is my net profit?<br />
                      645,000 – 320,000 (price of paiwi package) = 325,000 PHP
                      <br /><br />
                      11. Can I see my goats firsthand?<br />
                      Yes, you can visit the farm and participate in the ear tagging process. 
                  </p>
                </div>
                <div class="carousel-item">
                  <p>
                      12. Can I renew the contract?<br />
                      Yes, by availing a new package because the expected productivity of the purchased 30 does is only for 3 years.
                      <br /><br />
                      13. How is the Paiwi Program different from the traditional paiwi system or backyard livestock?<br />
                      <ul>
                          <li>The Paiwi Program is contract bound.</li>
                          <li>The goats are insured through an in-house insurance.</li>
                          <li>We use proven system of modern breeding.</li>
                          <li>The farmers are trained continuously.</li>
                          <li>The local does are cross-bred with Australian Boer goats – a superior goat breed for meat.</li>
                      </ul>
                  </p>
                </div>
                <div class="carousel-item">
                  <p>
                    14. How can I be a paiwi partner?<br />
                    Contact us thru our Facebook page https://www.facebook.com/Don-Chichos-Nurture-Farm-1975173889414635/, 
                    through our contact form below, or at donchicho@dcnurturefarm.com and ask for an available slot.
                    <br />
                    If a slot is available and agreement has been made, we will send you by email an invoice for the 50% down payment and copy of the contract.
                    <br /><br />
                    15. What is the payment terms?<br />
                    2 months with 30 days’ interval between each payment. After settling the downpayment, you have now your secured slot(/s).
                  </p>
                </div>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
      </div>
    </section>

    <!-- Contact Form -->
    <section class="bg-dark text-white" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Interested?</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <p class="text-left">
              Contact us!
              <br /><br />
              <span class="fa fa-envelope-o" aria-hidden="true"></span>&nbsp;<a href="mailto:donchicho@dcnurturefarm.com">donchicho@dcnurturefarm.com</a><br />
              <span class="fa fa-facebook" aria-hidden="true"></span>&nbsp;<a href="https://www.facebook.com/Don-Chichos-Nurture-Farm-1975173889414635/">Don Chicho&#39;s Nurture Farm</a><br />
              <span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Brgy. Balasing, Sta. Maria, Bulacan<br />
            </p>
          </div>
          <div id="minimap" class="col-lg-6 mx-auto text-center">
            <a href="https://www.google.com/maps/place/Don+Chicho's+Nurture+Farm,+Santa+Maria,+Bulacan/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/staticmap.png" alt="Google Map of Don Chicho's Nurture Farm, Santa Maria, Bulacan">
            </a>
          </div>
        </div>
      </div>
    </section>

<?php // get_footer(); ?>