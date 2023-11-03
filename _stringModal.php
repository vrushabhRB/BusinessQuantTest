<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>string</title>
</head>
<body>
  


<div class="modal fade" id="stringModal" tabindex="-1" role="dialog" aria-labelledby="stringModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stringModalLabel">string for an Chatmate Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="partials/_handlestring.php" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add your String</label>
                        
                        <input type="text" class="form-control" id="stringEmail" name="stringEmail" aria-describedby="emailHelp">
                        
                    </div> <button type="submit" class="btn btn-primary">Add string</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            </div>
                </form>
    </div>
  </div>
</div>
</body>
</html>