@extends('layouts.dashboard')

@section('content')
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Employee Sellery</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Employee Sellery</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
              data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <div class="row align-items-center m-0">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">

            </div>
            <div class="col-md-2 col-6">
              <input type="date" class="form-control">
            </div>
            <div class="col-md-2 col-6">

            </div>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table class="table align-middle table-striped">

                <thead>

                    <th>Name</th>
                    <th>January</th>
                    <th>February</th>
                    <th>March</th>
                    <th>April</th>
                    <th>May</th>
                    <th>June</th>
                    <th>July</th>
                    <th>August</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>December</th>

                </thead>


              <tbody>



                @foreach ($rows as $list)

                <tr id="employee{{ $list->id }}">



                  <td><span class="">{{ $list->employee->name }} </span></td>

                  <td>
                    <?php

                if($list->January!=''){


                    $January = json_decode($list->January);

$paidAmount = 0;

                    foreach($January as $jList){
$paidAmount = $paidAmount+$jList->amount;

                        echo $jList->amount;
                        echo '<br>';
                        echo $jList->date;
                        echo '<br>';
                    }

                    if($paidAmount<$list->employee->sellery){
                            $due = $list->employee->sellery-$paidAmount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','January','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }




                }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','January','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>


                </td>
                  <td>
                    <?php
                       if($list->February!=''){
                    $February = json_decode($list->February);
                    foreach($February as $fList){
                        echo $fList->amount;
                        echo '<br>';
                        echo $fList->date;

                        if($fList->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$fList->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','February','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }

                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','February','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>
                </td>
                  <td>
                 <?php
                       if($list->March!=''){
                    $March = json_decode($list->March);
                    foreach($March as $March_List){
                        echo $March_List->amount;
                        echo '<br>';
                        echo $March_List->date;

                        if($March_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$March_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','March','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','March','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>

                </td>
                  <td>
                    <?php
                       if($list->April!=''){
                    $April = json_decode($list->April);
                    foreach($April as $April_List){
                        echo $April_List->amount;
                        echo '<br>';
                        echo $April_List->date;

                        if($April_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$April_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','April','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','April','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>

                </td>
                  <td>

                    <?php
                       if($list->May!=''){
                    $May = json_decode($list->May);
                    foreach($May as $May_List){
                        echo $May_List->amount;
                        echo '<br>';
                        echo $May_List->date;

                        if($May_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$May_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','May','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','May','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>

                </td>
                  <td>


                    <?php
                       if($list->June!=''){
                    $June = json_decode($list->June);
                    foreach($June as $June_List){
                        echo $June_List->amount;
                        echo '<br>';
                        echo $June_List->date;

                        if($June_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$June_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','June','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','June','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>


                </td>
                  <td>



                    <?php
                       if($list->July!=''){
                    $July = json_decode($list->July);
                    foreach($July as $July_List){
                        echo $July_List->amount;
                        echo '<br>';
                        echo $July_List->date;

                        if($July_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$July_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','July','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','July','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>

                </td>
                  <td>
                    <?php
                       if($list->August!=''){
                    $August = json_decode($list->August);
                    foreach($August as $August_List){
                        echo $August_List->amount;
                        echo '<br>';
                        echo $August_List->date;

                        if($August_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$August_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','August','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','August','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>


                </td>
                  <td>

                    <?php
                       if($list->September!=''){
                    $September = json_decode($list->September);
                    foreach($September as $September_List){
                        echo $September_List->amount;
                        echo '<br>';
                        echo $September_List->date;

                        if($September_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$September_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','September','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','September','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>



                </td>
                  <td>


                    <?php
                       if($list->October!=''){
                    $October = json_decode($list->October);
                    foreach($October as $October_List){
                        echo $October_List->amount;
                        echo '<br>';
                        echo $October_List->date;

                        if($October_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$October_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','October','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','October','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>

                </td>
                  <td>

                    <?php
                       if($list->November!=''){
                    $November = json_decode($list->November);
                    foreach($November as $November_List){
                        echo $November_List->amount;
                        echo '<br>';
                        echo $November_List->date;

                        if($November_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$November_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','November','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','November','{{ $list->year }}')">Pay Now</button>

                   <?php
                    }
               ?>
                </td>
                  <td>
                    <?php
                       if($list->December!=''){
                    $December = json_decode($list->December);
                    foreach($December as $December_List){
                        echo $December_List->amount;
                        echo '<br>';
                        echo $December_List->date;

                        if($December_List->amount<$list->employee->sellery){
                            $due = $list->employee->sellery-$December_List->amount;
                            echo '<br>';
                            echo 'Due :'.$due;
                            ?>
                             <br>
                             <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','December','{{ $list->year }}')">Pay Due</button>
                            <?php
                        }else{
                        ?>
                        <br>
<span class="badge bg-success" >Paid</span>
                        <?php
                        }
                    }
                    }else {
                        echo "DUE";
                   ?>
                    <br>
                    <button class="badge bg-primary" onclick="employeePayment('{{ $list->id }}','{{ $list->employee->id }}','December')">Pay Now</button>

                   <?php
                    }
               ?>


                </td>

                </tr>

                @endforeach


              </tbody>
            </table>
          </div>
          {{ $rows->links('layouts.dashboard-paginate') }}

        </div>
      </div>

@section('script')
<script>
function employeePayment(sellery_id,employee_id,month,year){

    var url = "{{ asset('dashboad/employee_sellery') }}/"+sellery_id+"/"+employee_id+"/"+month+"/"+year;

    $.ajax({
                url: url,
                method: "get",
                success: function(data) {

                    // console.log(data)
                    $("#modal_content").html(data);
                    $("#dataModal").modal("show");
                },
            });

}

</script>

@endsection


      @endsection
