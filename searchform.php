<?php
/**
 * Template for displaying search forms
 *
 * @package paladinwebgroup
 */
?>

<?php /*
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
</form>
*/ ?>
<style>
    

.search-container {
  position: relative;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 300px;
  height: 100px;
}
.search-container .search {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 80px;
  height: 80px;
  background: var(--primary-color);
  border-radius: 50%;
  transition: all 1s;
  z-index: 4;
  /* box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4); */
}
.search-container .search:hover {
  cursor: pointer;
}
.search-container .search::before {
  content: "";
  position: absolute;
  margin: auto;
  top: 22px;
  right: 0;
  bottom: 0;
  left: 22px;
  width: 12px;
  height: 2px;
  background: white;
  transform: rotate(45deg);
  transition: all .5s;
}
.search-container .search::after {
  content: "";
  position: absolute;
  margin: auto;
  top: -5px;
  right: 0;
  bottom: 0;
  left: -5px;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 2px solid white;
  transition: all .5s;
}
.search-container input {
  font-family: montserrat, sans-serif;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 50px;
  outline: none;
  border: none;
  background: var(--sword-grey);
  color: white;
  /* text-shadow: 0 0 10px crimson; */
  padding: 0 80px 0 20px;
  border-radius: 30px;
  /* box-shadow: 0 0 25px 0 crimson, 0 20px 25px 0 rgba(0, 0, 0, 0.2); */
  transition: all 1s;
  opacity: 0;
  z-index: 5;
  font-weight: bolder;
  letter-spacing: 0.1em;
}
.search-container input:hover {
  cursor: pointer;
}
.search-container input:focus {
  width: 300px;
  opacity: 1;
  cursor: text;
}
.search-container input:focus ~ .search {
  right: -250px;
  background: #151515;
  z-index: 6;
}
.search-container input:focus ~ .search::before {
  top: 0;
  left: 0;
  width: 25px;
}
.search-container input:focus ~ .search::after {
  top: 0;
  left: 0;
  width: 25px;
  height: 2px;
  border: none;
  background: white;
  border-radius: 0%;
  transform: rotate(-45deg);
}
.search-container input::placeholder {
  color: white;
  opacity: 0.8;
  font-weight: normal;
}

</style>
<form role="search" method="get" class="search-form search-container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input 
    type="text" 
    placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'paladinwebgroup' ); ?>" 
    value="<?php echo get_search_query(); ?>"
    name="s" />
  <div class="search"></div>
</form>
