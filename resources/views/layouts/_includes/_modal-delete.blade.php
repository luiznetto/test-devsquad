<div class="modal" id="{{ 'modal-delete-' . $elementId }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">DELETE CONFIRMATION</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">                                                    
                <p class="text-center">Are You Sure Want To Delete ?</p>                
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="javascript(false);" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <form action="{{ route($route, $elementId) }}" method="POST">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>      
                </form>                                                  
            </div>
        </div>
    </div>
</div>