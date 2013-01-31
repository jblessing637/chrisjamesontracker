<h2>Where have you seen him?</h2>
<form class="form-horizonatal" action="actions/add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="date">Date</label>
		<div class="controls">
			<?php echo input('date', 'required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="time">Time</label>
		<div class="controls">
			<?php echo input('time', 'required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="location">Location</label>
		<div class="controls">
			<?php echo input('location', 'required')?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">
			<i class="icon-plus-sign icon-white"></i> Add Location
		</button>
		<a href="./"><button type="button" class="btn">Cancel</button></a>
	</div>
</form>