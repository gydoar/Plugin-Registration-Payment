<?php

function paypal_script()
{
    wp_register_script('paypal-script-js', plugins_url('/assets/js/script.js', __FILE__));
}

add_action('wp_enqueue_scripts', 'paypal_script');

function paypal_form()
{
    $response = '
    <div id="smart-button-container">
        <div style="text-align: center">
        <label for="description">Student name Or Invoice number: </label>
        <input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
        <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a Student name Or Invoice number</p>
        <div style="text-align: center"><label for="amount">Amount: </label><input name="amountInput" type="number" id="amount" value="" ><span> CAD</span></div>
        <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a amount, max $150 CAD</p>
        <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
        <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
        <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
    </div>

    <script src="https://www.paypal.com/sdk/js?client-id=REPLACE_YOUR_CLIENT_ID_API&enable-funding=venmo&currency=CAD" data-sdk-integration-source="button-factory"></script>

    <div style="text-align:center;justify-content: center;display: grid;">
        <p>We accept credit cards:</p>
        <img alt="credit card" src="' . plugins_url('/assets/img/credit-cards.png', __FILE__) . '">
    </div>
    
    ';

    wp_enqueue_script('paypal-sdk');
    wp_enqueue_script('paypal-script-js');

    return $response;
}

add_shortcode('paypal_form', 'paypal_form');
