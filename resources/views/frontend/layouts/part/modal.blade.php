<!-- Modal -->
<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <button class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>


                <div class="body-wrapper">

                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/send-email-icon.png" alt="Send Email Icon">

                    <h3 class="title">Thankyou for contacting us!</h3>

                    <p class="summary">
                        we will contact you shortly
                    </p>


                    <a href="{!! route('home') !!}" class="text-btn small">BACK TO HOME <i class="fa fa-long-arrow-right"></i></a>


                    <p class="small-text">or visit us on:</p>


                    <ul class="share-wrapper">
                        <li class="item">
                            <a href="#">
                                <i class="fa fa-facebook fb-hover"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#">
                                <i class="fa fa-instagram ig-hover"></i>
                            </a>
                        </li>
                    </ul>

                </div>



            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="bookingResultModal" tabindex="-1" role="dialog" aria-labelledby="bookingResultModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body booking-result">

                <button class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>


                <div class="body-wrapper">

                    <img class="icon" src="{!! url('/') !!}/assets/frontend/images/success-icon.png" alt="Success Icon">

                    <h3 class="title">Are you sure your data is correct?</h3>

                    <p class="summary">
                        If you are done, We will direct you to the payment gateway to continue the payment.
                    </p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">
                                    Trip to <span id="destination-city">Sydney</span> Summary
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td width="40%">Name</td>
                                <td id="name">Melissa Stefani</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td id="email">melissastefanini@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td id="phoneNumber">0812 6700 9898</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Number of People</td>
                                <td id="participants">2 People</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Cateogry 1</td>
                                <td>Music Festival</td>
                            </tr>

                            <tr>
                                <td>Date</td>
                                <td>Sunday, 29th of July 2018</td>
                            </tr>

                            <tr>
                                <td>Cateogry 2</td>
                                <td>Historical Museum</td>
                            </tr>

                            <tr>
                                <td>Date</td>
                                <td>Tuesday, 1st of August 2018</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Iteneraries Graphic</td>
                                <td>YES</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Other Information</td>
                                <td>
                                    I want to make this trip hilarious and adding my
                                    brave experience
                                </td>
                            </tr>


                        </tbody>


                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="col-footer">
                                        <div class="col-half">
                                            Total Categories: <strong id="total-category">2</strong>
                                        </div>

                                        <div class="col-half">
                                            Total Price: <strong id="total-price">$750</strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>


                    <div class="text-center">
                        <a href="#" class="btn main-btn">CONTINUE PAYMENT <i class="fa fa-angle-right"></i></a>
                    </div>


                </div>



            </div>

        </div>
    </div>
</div>