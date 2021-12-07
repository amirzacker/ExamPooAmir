<?php
class Produit
{
private int $id_produit;
private string $title;
private string $description;
private int $price;
private int $id_category;



/**
 * Get the value of id_produit
 */ 
public function getId_produit()
{
return $this->id_produit;
}

/**
 * Set the value of id_produit
 *
 * @return  self
 */ 
public function setId_produit($id_produit)
{
$this->id_produit = $id_produit;

return $this;
}

/**
 * Get the value of title
 */ 
public function getTitle()
{
return $this->title;
}

/**
 * Set the value of title
 *
 * @return  self
 */ 
public function setTitle($title)
{
$this->title = $title;

return $this;
}

/**
 * Set the value of description
 *
 * @return  self
 */ 
public function setDescription($description)
{
$this->description = $description;

return $this;
}

/**
 * Get the value of price
 */ 
public function getPrice()
{
return $this->price;
}

/**
 * Set the value of price
 *
 * @return  self
 */ 
public function setPrice($price)
{
$this->price = $price;

return $this;
}

/**
 * Get the value of id_category
 */ 
public function getId_category()
{
return $this->id_category;
}

/**
 * Set the value of id_category
 *
 * @return  self
 */ 
public function setId_category($id_category)
{
$this->id_category = $id_category;

return $this;
}

/**
 * Get the value of description
 */ 
public function getDescription()
{
return $this->description;
}
}
