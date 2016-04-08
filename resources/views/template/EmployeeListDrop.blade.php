<div class="4u 12u$(xsmall)">
    <div class="select-wrapper">
        <select name="EmployeeID" id="EmployeeID">
            <option value="">- Employee ID -</option>
            @foreach($employee_id as $employee)
                <option value="{{$employee->MSID}}">{{$employee->MSID}}</option>
            @endforeach
        </select>
    </div>
</div>