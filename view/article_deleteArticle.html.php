<?php require_once 'header.html.php';?>

<form method="POST" id"creation">
                        <div class="mb-3">

                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title" name="title">

                            </div>

                        <div class="mb-3">

                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                        </div>



                        <button type="submit" class="btn btn-primary" name = "inserer">Ajouter</button>

 </form>


<?php require_once 'footer.html.php';?>