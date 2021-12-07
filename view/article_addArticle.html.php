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
                        <div class="mb-3">

                        <label for="title" class="form-label">prix</label>
                        <input type="text" class="form-control" id="title" name="price">

                        </div>
                        <div class="mb-3">
                        <select id="fruits01" class="select" name="id_category">
                        <option name="id_category">Choose your category:</option>
                        <?php foreach ($results as $category) {?>


    <option name="id_category" value="<?=$category->getId_category()?>"><?=$category->getName_category()?></option>
<?php }?>
                        </select>

                        </div>


                        <button type="submit" class="btn btn-primary" name = "inserer">Ajouter</button>

 </form>


<?php require_once 'footer.html.php';?>