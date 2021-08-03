<?php
function renderImage($image)
{
    return "

      <div class='item  image' data-bg-img='assets/images/slider/$image'>
            <div class='overlay'></div>
            <div class='display-table'>
                <div class='display-table-cell'>
                    <div class='container pb-150 pt-150'>
                        <div class='row'>
                            <div class='col-md-7 col-md-offset-5 box-overlay'>
                                <div class='pb-50 pt-30 p-50 outline-border bg-white-transparent'>
                                    <!-- <h2 class='text-uppercase text-white font-titillium font-weight-600 mb-0'>Graduation
                                    </h2>

                                    <p class='font-16 text-white'>

                                    </p> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



     ";
}