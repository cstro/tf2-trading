<h3 class="title">Trades</h3>


<div class="row row-table-header hidden-xs">
        <div class='col-sm-2 col-xs-12'>
			<p>Item Name</p>
        </div>

        <div class='col-sm-1 col-xs-12'>
			<p>Buy Price</p>
        </div>

        <div class='col-sm-1 col-xs-12'>
			<p>Sell Price</p>
        </div>

		<div class='col-sm-2 col-xs-12'>
			<p>Purchased Date</p>
        </div>

		<div class='col-sm-2 col-xs-12'>
			<p>Sold Date</p>
        </div>


    </div>

@foreach($trades as $trade)

	<div class="row trades-row">
		<a class="row-link" href="{{ route('trade.show', ['trade' => $trade->id] ) }}">
			<div class='col-sm-2 col-xs-12 row-table-cell'>
				<p>{{$trade->item_name}}</p>
			</div>

			<div class='col-sm-1 col-xs-12 row-table-cell'>
				<p>
					<?php
						$currency = Currency::find(Session::get('currency'));
						if($currency != null){
							echo round($trade->buy_price / $currency->scrap_value, 2);
						}
					?>
				</p>
			</div>

			<div class='col-sm-1 col-xs-12 row-table-cell'>
                <p>
					<?php
						$currency = Currency::find(Session::get('currency'));
						if($currency != null){
							echo round($trade->sell_price / $currency->scrap_value, 2);
						}
					?>
				</p>
			</div>

			<div class='col-sm-2 col-xs-12 row-table-cell'>
				<p>{{ date('d/m/Y', $trade->buy_date) }}</p>
			</div>

			<div class='col-sm-2 col-xs-12 row-table-cell'>
				@if ($trade->sell_date == 0)
					<p class="text-warning">Unsold</p>
				@else
					<p>{{ date('d/m/Y', $trade->sell_date) }}</p>
				@endif
			</div>
		</a>
		<!--<div class='col-md-1 col-sm-2 col-xs-4'>
			<a class="btn btn-info" href="{{ route('trade.show', ['trade' => $trade->id] ) }}">
				<i class="glyphicon glyphicon-eye-open"></i> View</a>
		</div>-->

		<div class='col-md-1 col-sm-2 col-xs-6'>
			<a class="btn btn-success" href="{{ route('trade.edit', ['trade' => $trade->id] ) }}">
				<i class="glyphicon glyphicon-pencil"></i> Edit</a>
		</div>

		{{ Form::open(['route' => ['trade.destroy', $trade->id], 'method' => 'DELETE']) }}
			<div class='col-md-1 col-sm-2 col-xs-6'>
				<button class="btn btn-danger">
					<i class="glyphicon glyphicon-trash"></i> Delete
				</button>
			</div>

		{{ Form::close() }}
	</div>

@endforeach
