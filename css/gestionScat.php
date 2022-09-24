
<div class="">
                                            <label for="">Sous-categories correspondants :</label>                                            
                                            <select    required type="text" class="form-control" name="des" 
                                            placeholder=""> 
                                       <?php
                                       $con=mysqli_connect("localhost","root","","pfa");
                               $requette6 = "select * from souscat ";
                                    $result6 = mysqli_query($con,$requette6);
                                    while($ligne6=mysqli_fetch_array($result6 , MYSQLI_NUM)){

                                       echo("<option>$ligne6[1]</option>");}
                                            ?>
                                        </select>
                                       </div>