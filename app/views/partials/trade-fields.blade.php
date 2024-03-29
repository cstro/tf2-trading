	<div class="form-group">
		<div class="col-xs-12">
			{{ Form::label('item_name', 'Item Name') }}
		</div>
		<div class="col-xs-12">
			{{ Form::text('item_name', null, ['class' => 'form-control', 'placeholder' => 'E.g. Ghastly Gibus']) }}
		</div>
	</div>
<!-- region Buy Price -->
	<div class="form-group">
		<div class="col-xs-12">
			{{ Form::label('buy_price', 'Buy Price') }}
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">refined</div>
				{{ Form::number('buy_price_refined', null, ['class' => 'form-control', 'placeholder' => 'E.g. 3']) }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">reclaimed</div>
				{{ Form::number('buy_price_reclaimed', null, ['class' => 'form-control', 'placeholder' => 'E.g. 2']) }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">scrap</div>
				{{ Form::number('buy_price_scrap', null, ['class' => 'form-control', 'placeholder' => 'E.g. 1']) }}
			</div>
		</div>
	</div>
<!-- endregion -->

<!-- region Sell Price -->
	<div class="form-group">
		<div class="col-xs-12">
			{{ Form::label('sell_price', 'Sell Price') }}
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">refined</div>
				{{ Form::number('sell_price_refined', null, ['class' => 'form-control', 'placeholder' => 'E.g. 3']) }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">reclaimed</div>
				{{ Form::number('sell_price_reclaimed', null, ['class' => 'form-control', 'placeholder' => 'E.g. 2']) }}
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="input-group">
				<div class="input-group-addon">scrap</div>
				{{ Form::number('sell_price_scrap', null, ['class' => 'form-control', 'placeholder' => 'E.g. 1']) }}
			</div>
		</div>
	</div>
<!-- endregion -->
	<div class="form-group">
		<div class="col-xs-12">
			{{ Form::label('buy_date', 'Purchased Date') }}
		</div>

		<div class="col-xs-12">
			<div class="input-group date buy_date">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-th"></i>
				</span>
                {{ Form::text('buy_date', date('d/m/Y'), ['class'=>'form-control']) }}
			</div>
		</div>

	</div>
