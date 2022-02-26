<form action="{{ url('dashboad/employee_sellery') }}" method="post">
@csrf
<div class="row g-3">

<input type="hidden" name="employee_id" value="{{ $rows->employee->id }}">
<input type="hidden" name="id" value="{{ $rows->id }}">
<div class="col-md-6">
    <div class="form-group">
      <label for="">Employee Id</label>
      <input type="text"   class="form-control" value="{{ $rows->employee->employee_id }}" placeholder="" readonly>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="">Employee Name</label>
      <input type="text"   class="form-control" value="{{ $rows->employee->name }}" placeholder="" readonly>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="">Month</label>
      <input type="text" name="month"  class="form-control" value="{{ $month }}" placeholder="" readonly>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="">Year</label>
      <input type="text" name="year"  class="form-control" value="{{ $year }}" placeholder="" readonly>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="">Amount</label>
      <input type="text" name="amount"  class="form-control" value="" placeholder="" >
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
      <label for="">Date</label>
      <input type="text" name="date"  class="form-control" value="{{ date('Y-m-d H:i:s') }}" placeholder="" readonly>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">

      <input type="submit" class="btn btn-success" value="Submit" >
    </div>
</div>

</div>





</form>
