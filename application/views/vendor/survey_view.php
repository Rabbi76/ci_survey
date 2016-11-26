

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Vendors
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-8" style="background:#c9c9cf; margin: 10px 40px">

                <form id="survey_answer">
                    <input type="hidden" name="survey_id" value="<?php echo $survey[0]['survey_id'] ?>">
                    <?php
                    echo'<h2 style="margin: 20px">'.$survey[0]['title'].'</h2>';
                    echo '<div style="background:#c2c2d6; margin:20px;padding:1px">';
                    echo'<h5 style="margin: 20px">Description: '.$survey[0]['description'].'</h5>';
                    echo '</div>';
                    $count=0;
                    //var_dump($survey);
                    foreach($survey as $surv)
                    {

                        if($count%2==0)echo '<div style="background:#E8E8E9; margin:20px;padding: 10px">';
                        else echo '<div style="background:#E8E8E9; margin:20px;padding: 10px">';
                        echo '<div class="row">';
                        echo '<div class="col-lg-10">';
                        echo '<h4>'.$surv['question_title'].'</h4>';
                        echo'</div>';
                        echo'</div>';
                        echo '<div class="row" style="padding: .5px  40px">';
                        if($surv['question_type']== "Text Box"){ ?>

                            <input name="<?php  echo $surv['id']; ?>" class="form-control" type="text">
                        <?php }elseif($surv['question_type']== "Radio"){ ?>
                            <?php if($surv['question_options'] != '') {
                                $RadioOptions = array();
                                $RadioOptions = explode(",", $surv['question_options']);
                                foreach ($RadioOptions as $rOptions) {
                                    ?>
                                    <label class="form-check-inline mt5px"><input type="radio" name="<?php  echo $surv['id']; ?>" value="<?php echo $rOptions; ?>" rel="" class="question_type form-check-input" id="type_" required> <?php echo $rOptions; ?></label>
                                <?php }
                            }?>
                        <?php  }elseif($surv['question_type']== "Text Area"){ ?>
                            <textarea name="<?php  echo $surv['id']; ?>" class="form-control"></textarea>
                        <?php  }elseif($surv['question_type']== "Check Box"){ ?>
                            <?php if($surv['question_options'] != '') {
                                $RadioOptions = array();
                                $RadioOptions = explode(",", $surv['question_options']);
                                foreach ($RadioOptions as $rOptions) {
                                    ?>
                                    <label class="form-check-inline mt5px"><input name="<?php  echo $surv['id']; ?>" type="checkbox" name="questionType_" value="<?php echo $rOptions; ?>" rel="" class="question_type form-check-input" id="type_" > <?php echo $rOptions; ?></label>
                                <?php }
                            }?>
                        <?php  }
                        echo '</div>';
                        echo '</div>';
                        $count++;
                    }

                    ?>
                    <div class="row">
                        <div class="col-md-4" style="margin: 0 auto; ">
                            <button style="margin: 10px;widows: 0 auto" id="submit_answer_btn" class="btn btn-default">Submit Answer</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->


