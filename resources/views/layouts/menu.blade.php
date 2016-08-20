<div class="col-sm-3">
		<div class="list-group">
			<a class="list-group-item active">Menu</a>
			<a href="{{ url('users') }}" class="list-group-item">
				Users
			</a>
			<a href="javascript:void" class="list-group-item group-toggle" data-toggle="dropdown">
				Tasks
				<span class="pull-right"><i class="fa fa-caret-down"></i></span>
			</a>
				<div class="list-group-item sub-item">
				<a href="{{ url('tasks') }}">All Tasks</a>
				</div>
				<div class="list-group-item sub-item">
				<a href="{{ url('create-task') }}">Create Task</a>
				</div>
		</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			// Set behavior for show and hide contact groups
			$('.group-toggle').click(function() {
				if ($('.sub-item').css('display') == 'none') {
					$('.sub-item').show();
				}
				else {
					$('.sub-item').hide();
				}
			});
		});
	</script>