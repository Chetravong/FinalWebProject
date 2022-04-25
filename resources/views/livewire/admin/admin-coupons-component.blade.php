<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Coupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Coupon Code</th>
                                    <th>Coupon Type</th>
                                    <th>Coupon Value</th>
                                    <th>Cart Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->type }}</td>
                                        @if($coupon->type=='fixed')
                                            <td>${{ $coupon->value }}</td>
                                        @else
                                            <td>{{ $coupon->value }}%</td>
                                        @endif
                                        <td>${{ $coupon->cart_value }}</td>
                                        <td>
                                            <a href="{{ route('admin.editcoupon',['coupon_id'=>$coupon->id]) }}"><i class="fa fa-edit fa-2x"></i>
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this coupon')|| event.stopImmediatePropagation()" wire:ckick.prevent="deleteCoupon({{ $coupon->id }})" style="margin-left:10px"> 
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

