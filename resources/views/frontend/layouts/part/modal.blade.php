<!-- Modal -->
<div class="modal fade" id="successFormModal" tabindex="-1" role="dialog" aria-labelledby="successFormModal" aria-hidden="true">
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


                            <tr id="before-new-category">
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Iteneraries Graphic</td>
                                <td id="withItenerary">YES</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>Other Information</td>
                                <td id="message">
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
                                            Total Price: USD <strong id="total-price">750</strong>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    <form METHOD="POST" action="{!! route('booking-submit') !!}">

                        <input type="hidden" name="formData" value="">

                        <div class="text-center">
                            <button type="submit" class="btn main-btn">CONTINUE PAYMENT <i class="fa fa-angle-right"></i></button>
                        </div>
                    </form>




                </div>



            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="quickViewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <button class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>


                <div class="body-wrapper">
                    <p class="title">Category Name :</p>
                    <p id="categoryName" class="subtitle"></p>

                    <p class="title">Short Description :</p>
                    <p id="categoryDescription" class="subtitle"></p>

                    <p class="title">Price :</p>
                    <p id="categoryPrice" class="subtitle"></p>

                </div>



            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="buyEssentialModal" tabindex="-1" role="dialog" aria-labelledby="buyEssentialModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <button class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>


                <div class="body-wrapper">

                    <div class="form-section">
                        <h1 class="default-title">Fill your personal data here:</h1>

                        <form id="esssential-form" class="form" role="form" data-validate="true" method="POST" action="{!! route('order-essential') !!}">

                            <div class="form-group">
                                <label class="label-form active" for="cityId">VACAY ESSENTIAL</label>

                                <select class="form-control custom-select custom-control" id="cityId" name="cityId" data-validation="required">
                                    <option value="" disabled selected>Choose your City Essential</option>
                                    @foreach(GetEssentialList() as $key => $item)
                                        <option value="{!! @$item->id !!}">{!! @$item->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="label-form" for="firstName">FIRST NAME</label>
                                <input type="text" class="form-control custom-control" id="firstName" name="firstName" placeholder="First Name" data-validation="required">
                            </div>

                            <div class="form-group">
                                <label class="label-form" for="lastName">LAST NAME</label>
                                <input type="text" class="form-control custom-control" id="lastName" name="lastName" placeholder="Last Name" data-validation="required">
                            </div>

                            <div class="form-group">
                                <label class="label-form" for="phoneNumber">PHONE NUMBER</label>
                                <input type="text" class="form-control custom-control" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" data-validation="required number">
                            </div>

                            <div class="form-group">
                                <label class="label-form" for="email">EMAIL</label>
                                <input type="text" class="form-control custom-control" id="email" name="email" placeholder="Insert your email here" data-validation="required email">
                            </div>


                            <div class="text-center">
                                <button type="submit" id="btn-submit-order" class="btn main-btn">CONTINUE PAYMENT <i class="fa fa-angle-right"></i></button>
                            </div>

                        </form>


                    </div>




                </div>



            </div>

        </div>
    </div>
</div>