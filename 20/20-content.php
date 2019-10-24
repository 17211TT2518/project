<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-20">
    <div class="container">
        <div class="header">
            <p class="cus">Return customer?
                <a class="login" href="#">Click here to login</a>
            </p>
            <p class="cus">Have a coupon?
                <a class="login" href="#">Click here to enter your code</a>
            </p>
        </div>

        <div class="row">
            <div class="col-md-6 left">
                <h3 class="bill">billing details</h3>
                <div class="form-group">
                    <p for="first-name">First name
                        <span class="icon">*</span>
                    </p>
                    <input type="name" class="form-control" id="first-name" placeholder="Enter first name...">
                </div>
                <div class="form-group">
                    <p for="first-name">
                        Last name
                        <span class="icon">*</span>
                    </p>
                    <input type="name" class="form-control" id="last-name" placeholder="Enter last name...">
                </div>
                <div class="form-group">
                    <p for="company">
                        Company name (optional)
                    </p>
                    <input type="name" class="form-control" id="Company">
                </div>
                <p class="first-name">Country
                    <span class="icon">*</span>
                </p>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Viet Nam <span class="caret"></span></button>
                    <ul class="dropdown-menu scrollable-menu" role="menu">
                        <li><a href="#" class="selected">Thai lan</a></li>
                        <li><a href="#">Singapore</a></li>
                        <li><a href="#">Japan</a></li>
                        <li><a href="#">India</a></li>
                        <li><a href="#">Hong kong</a></li>
                        <li><a href="#">Iran</a></li>
                        <li><a href="#">Canada</a></li>
                        <li><a href="#">Singapore</a></li>
                        <li><a href="#">Japan</a></li>
                        <li><a href="#">India</a></li>
                        <li><a href="#">Hong kong</a></li>
                        <li><a href="#">Iran</a></li>
                        <li><a href="#">Canada</a></li>
                    </ul>
                </div>
                <br><br>
                <div class="form-group">
                    <p for="first-name">Street address
                        <span class="icon">*</span>
                    </p>
                    <input type="name" class="form-control" id="street" placeholder="House number and street name">
                </div>
                <div class="form-group">
                    <p for="first-name">Postcode / ZIP (optional) </p>
                    <input type="name" class="form-control" id="postcode">
                </div>
                <div class="form-group">
                    <p for="first-name">Town / City
                        <span class="icon">*</span>
                    </p>
                    <input type="name" class="form-control" id="town">
                </div>
                <div class="form-group">
                    <p for="first-name">Phone
                        <span class="icon">*</span>
                    </p>
                    <input type="name" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <p for="first-name">Email address
                        <span class="icon">*</span>
                    </p>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-box">
                    <input type="checkbox" class="form-check-input" id="check2">
                    <span class="form-check-label click2">Create an account?</span>
                </div>
                <div class="form-add">
                    <input type="checkbox" class="form-check-input" id="check3">
                    <span class="form-check-label click3">SHIP TO A DIFFERENCT ADDRESS ?</span>
                </div>
                <div class="form-note">
                    <p for="exampleFormControlTextarea1">Oder notes (opyional)</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Notes about your order, e.g, special notes for delivery"></textarea>
                </div>
            </div>
            <div class="col-md-6 right">
                <h3 class="code">your code</h3>
                <div class="bord">
                    <table>
                        <tr>
                            <th class="pro">product</th>
                            <th class="total">total</th>
                        </tr>

                        <tbody>
                            <tr>
                                <td class="pro-name">Ysed rhoncus
                                    <strong class="pro-quantity">× 1</strong>
                                </td>
                                <td class="pro-name">
                                    <span class="dola">£579.00</span>
                                </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <th class="pro-name">
                                    Subtotal
                                </th>
                                <td class="pro-name">
                                    <span class="dola">£579.00</span>
                                </td>
                            </tr>

                            <tr>
                                <th class="pro-name">
                                    Shipping
                                </th>
                                <td>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="check4">
                                        <span class="form-check-label click4">Flat Rate:£12.00</span>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="check5">
                                        <span class="form-check-label click5">Free Shipping</span>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="check6">
                                        <span class="form-check-label click6">Local Delivery</span>
                                    </div>
                                </td>
                            </tr>

                            <tr class="total">
                                <th class="pro-name">
                                    <p> TOTAL</p>
                                </th>
                                <td class="pro-name">
                                    <span class="sys">£579.00</span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="order">
                    <div class="form-radio">
                        <input type="radio" class="form-check-input" id="check7">
                        <span class="form-check-label click7">Local Delivery</span>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p class="pay">Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                                    Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-radio">
                        <input type="radio" class="form-check-input" id="check8">
                        <span class="form-check-label click8">Local Delivery</span>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p class="pay">Pay with cash upon delivery..</p>
                            </div>
                        </div>
                    </div>
                    <p class="per">Your personal data will be used to process your order,
                        support your experience throughout this website, and for other purposes described in our
                        <a class="poli" href="#">privacy policy</a></p>

                    <div class="form-box">
                        <input type="checkbox" class="form-check-input" id="check">
                        <span class="form-check-label save">I have read and agree to the website <a class="poli" href="#">terms and conditions</a> </span>
                        <span class="icon">*</span>
                    </div>
                    <button type="button" class="btn">place older</button>
                </div>
            </div>
        </div>
    </div>
</div>