   <?php $this->load->view('header'); ?>


    <main class="main__content_wrapper">
        
        
        <!-- Start error section -->
        <section class="error__section section--padding">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="error__content text-center">
                            <img class="error__content--img mb-50" src="assets/img/other/404-thumb.png" alt="error-img">
                            <h2 class="error__content--title">Opps ! We,ar Not Found This Page </h2>
                            <!-- <p class="error__content--desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi animi aliquid minima assumenda.</p> -->
                            <a class="error__content--btn primary__btn" href="<?php echo base_url(); ?>">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End error section -->

     <?php $this->load->view('bottom-sec'); ?>
    </main>

   <?php $this->load->view('footer'); ?>