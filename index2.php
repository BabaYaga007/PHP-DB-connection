
    <!DOCTYPE HTML>
    <html>
    <form name="" action="index2.php" method="post">
                        <div class="form-group col-md-6">
                            <p>
                                <label for="name">Name</label>    
                                <input type="text" name="name" class="form-control" id="name" required="required">
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <p>
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required="required">
                            </p>
                        </div>

                        <div class="form-group col-md-12">
                            <p>
                                <label for="Message">Message</label>
                                <textarea rows="6" name="message" class="form-control" id="message" required="required"></textarea>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit">Add Comment</button>
                            <!-- <input type="submit" name="submit" id="Submit" value="Add comment"> -->
                        </div>
                    </form>
    </html>

    <?php     $blog_num ='1';

        include 'add.php';
    
    ?>


    