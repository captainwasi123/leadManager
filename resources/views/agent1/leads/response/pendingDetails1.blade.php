<div class="col-md-12">
      <div class="modal-body ">
        <h2 class="modal-title" id="exampleModalLabel">CATEGORY PENDING LEAD INFORMATION</h2>
        <div class="row">
        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Category</th>
                    <th>Pending Leads</th>
                </tr>
            </thead>
                <tbody>
                  @foreach($categories as $key => $val)
                        <tr> 
                        @if(count($val->agent1pendingLead) > 0) 
                            <td>{{++$key}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{count($val->agent1pendingLead)}}</td> 
                        @endif
                        </tr>
                    @endforeach 
                </tbody>
        </table>                                                         
</div>
</div>
</div>
        