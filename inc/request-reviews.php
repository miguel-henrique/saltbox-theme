


<?php

function get_reviews() {
  //  @var array|WP_Error $response
$response = wp_remote_get( 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJq7Ywj2EF9YgR0rkF36HM3qU&fields=name,rating,formatted_phone_number,reviews&key=AIzaSyDNEMCLTYnXDdKbxCBc5apuyJKSpO8C-7Y', array(
    //'timeout' => 20,
    'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:20.0) Gecko/20100101 Firefox/20.0'
  ) );
 
if ( is_array( $response ) && ! is_wp_error( $response ) ) {
    $headers = $response['headers']; // array of http header lines
    $body    = $response['body']; // use the content
    $data = json_decode($body);
    $reviews_data = $data->result->reviews;
    $reviews_length = count($reviews_data);



    echo '<p class="reviews-number" onclick="showPopup(\'reviews\')">'.$reviews_length,'</p>';


    echo <<<EOD
    <div id="reviews" class="modal">
        <span class="close cursor" onclick="closePopup('reviews')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container id="swiper-reviews" space-between="5" slides-per-view="1" navigation="true" loop="true">
EOD;

foreach ( $reviews_data as $reviews ) {
    echo <<<EOD
                    <swiper-slide class="reviews-slide">
                        <div class="reviews-content">
                            <div class="col img-column">
                              <img alt="" loading="lazy" loading="lazy" class="d-block w-100" src="{$reviews->profile_photo_url}"/>
                              <div class="stars-review"></div>
                            </div>
                            <div class="col content-column">
                                <div class="review-text">
                                  <p>{$reviews->text}</p>
                                </div>
                                <p class="name">{$reviews->author_name}</p>
                                <p class="position">{$reviews->relative_time_description}</p>
                            </div>
                        </div>
                    </swiper-slide>
EOD;
}

echo <<<EOD
                </swiper-container>
            </div>
        </div>
    </div>
EOD;


}

}

get_reviews();


