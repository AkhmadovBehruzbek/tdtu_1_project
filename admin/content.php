<!-- page content -->
<div class="right_col" role="main">
    <!-- <div class="row"> -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <h2>Saytning Admin oynasi</h2>

                <?php
                    include("adminf.php");
                    if ($_GET["m"] == "lr") {
                        royxat("projects", "lr", array("sarlavha", "content", "vaqt"));
                    }
                    if ($_GET["m"] == "lq") {
                        //add_loyiha();
                    }
                    if ($_GET["m"] == "yr") {
                        //yangiliklar();
                    } 
                    if ($_GET["m"] == "yq") {
                        //add_yangilik();
                    }
                ?>
            </div>  
        </div>
    <!-- </div>-->
</div>
<!-- /page content -->