
<!-- Modal for update faculty-->
<div class="modal fade" id="myId<?php echo $row['id']; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">TOURNAMENT INFORMATION</h4>
            </div>
                <?php
                    $a=mysqli_query($conn,"SELECT * FROM tournament_schedule WHERE id='".$row['id']."'");
                    $b=mysqli_fetch_array($a);
                ?>
            <form method="POST" action="tournament-list-function.php<?php echo '?id='.$row['id']; ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Team Captain</label>
                                <div class="form-line">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="text" class="form-control" name="team_captain" value="<?php echo $row['team_captain']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Game ID</label>
                                <div class="form-line">
                                    <input type="number" class="form-control" name="game_id" value="<?php echo $row['game_id']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Game Schedule</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="game_schedule" value="<?php echo $row['game_schedule']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </form>   
        </div>
    </div>
</div>     