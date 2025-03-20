
<?php



if(isset($_POST['add_exam'])){
    extract($_POST);

    $examAddSQL = "INSERT INTO `exam_all`( `exam_name`, `start_date`, `start_time`, `duration`) VALUES ('$exam_name','$exam_date','$exam_time','$duration')";
    $retSMS = $crud->select($examAddSQL);
    if(isset($retSMS)){
        echo "<h2 class='text-success'>Exam Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Exam Added Error, Please Try Again!!</h2>";
    }
}

?>

<!--== Seminar Details ==-->
<h1>Add Exam</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Exam</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Exam name</label>
                                <input type="text" value="" class="validate" required name="exam_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Start Date</label>
                                <input type="date" value="" class="validate" required name="exam_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Start Time</label>
                                <input type="time" value="" class="validate" required name="exam_time">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Exam Duration</label>
                                <input type="text" value="" class="validate" required name="duration">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_exam"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- <div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>New Exam</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i
                                    class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Exam 1</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i
                                    class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Exam 2</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i
                                    class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Exam 3</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false"><i
                                    class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Exam 4</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu4" aria-expanded="false"><i
                                    class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Exam 5</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Exam Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="" class="validate">
                                                <label class="">Main exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="" class="validate">
                                                <label>Exam name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="" class="validate">
                                                <label>Date</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="" class="validate">
                                                <label>Start time</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="" class="validate">
                                                <label>Duration</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">De-Active</option>
                                                    <option value="3">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                        type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Exam Details</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" value="Semester 1" class="validate">
                                            <label class="">Main exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="Board Exam Training Classes" class="validate">
                                            <label>Exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="12 may 2018" class="validate">
                                            <label>Date</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="10:00AM" class="validate">
                                            <label>Start time</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="03:00hrs" class="validate">
                                            <label>Duration</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">De-Active</option>
                                                <option value="3">Delete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Exam Details</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" value="Semester 1" class="validate">
                                            <label class="">Main exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="Board Exam Training Classes" class="validate">
                                            <label>Exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="12 may 2018" class="validate">
                                            <label>Date</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="10:00AM" class="validate">
                                            <label>Start time</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="03:00hrs" class="validate">
                                            <label>Duration</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">De-Active</option>
                                                <option value="3">Delete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Exam Details</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" value="Semester 1" class="validate">
                                            <label class="">Main exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="Board Exam Training Classes" class="validate">
                                            <label>Exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="12 may 2018" class="validate">
                                            <label>Date</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="10:00AM" class="validate">
                                            <label>Start time</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="03:00hrs" class="validate">
                                            <label>Duration</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">De-Active</option>
                                                <option value="3">Delete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Exam Details</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" value="Semester 1" class="validate">
                                            <label class="">Main exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="Board Exam Training Classes" class="validate">
                                            <label>Exam name</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="12 may 2018" class="validate">
                                            <label>Date</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="10:00AM" class="validate">
                                            <label>Start time</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" value="03:00hrs" class="validate">
                                            <label>Duration</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="2">De-Active</option>
                                                <option value="3">Delete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->