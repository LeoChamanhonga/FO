<?php require "../int.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link rel="stylesheet" href="css/FOManager.MainFlow.css"-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/script.css">
     <link rel="stylesheet" href="../css/aba.css">
    <link rel="stylesheet" href="../css/Basic.css">
  <link rel="stylesheet" href="../css/FOManager.FOManager.css">
  <link rel="stylesheet" href="../css/OutSystemsReactWidgets.css">
  <link rel="stylesheet" href="../css/OutSystemsUI.OutSystemsUI.css">
  <link rel="stylesheet" href="../css/OutSystemsUI.OutSystemsUI.extra.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/brands.min.css">
  <link rel="stylesheet" href="../css/solid.min.css">
  <link rel="stylesheet" href="../css/fontawesome.css">

<?php require "../estilo.php"; ?>

<title>Adicionar Obra</title>
<body>
<div id="reactContainer">
   <div  id="transitionContainer">
    <div class="active-screen screen-container slide-from-right-enter-done">
    <div data-block="Common.Layout" class="OSBlockWidget" id="$b1">
    <div   class="layout layout-side layout-native ios-bounce aside" id="b1-LayoutWrapper">
        <!-- drawer-->
		<script src="../js/script.js"></script>
    <?php require "../drawer.php";?>

				<h1 data-advancedhtml="" class="header-title">
					<div class="OSInline" id="b1-Title">
						<span style="font-weight: bold;">Nova obra</span>
					</div>
				</h1>
				<div class="header-right" id="b1-HeaderRight"></div>
			</div>
		</div>
	</div>
	<div class="header-top-content ph" id="b1-HeaderContent"></div>
</header>
<div data-container="" class="content" id="b1-ContentWrapper">
	<div data-container="" class="main-content ThemeGrid_Container" role="main" id="b1-MainContentWrapper">
		<div class="content-middle" id="b1-Content">
			<form  method="post"  action="processaObra.php" class="form card OSFillParent" >
				<div data-container="">
					<label data-label="" class="OSFillParent" for="Dropdown4">
						<span style="font-weight: bold;">Cliente</span>
					</label>
					<div id="Dropdown4-container" class="dropdown-container" data-dropdown="">
						<select class="dropdown-display dropdown" name="cliente"  >

							<?php 
							$mysqlQu = mysqli_query($conexao, "SELECT * FROM clientes");

							while ($row = mysqli_fetch_assoc($mysqlQu)) {
							


							 ?>
							<option value="<?php echo $row['nome']; ?>"><?php echo $row['nome']; ?></option>
						<?php } ?>
						</select>
					</div>
				</div>
				<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Nr. Job Card</span>
					</label>
					<span class="input-text">
						<input data-input="" required class="form-control OSFillParent" type="text"  maxlength="250" name="codigo"  wfd-id="id3"></span>
					</div>
					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Localização</span>
					</label>
					<div id="Dropdown3-container" class="dropdown-container" data-dropdown="">
                       
                        <select required name="localizacao" class="dropdown-display dropdown" >
                             <?php   
                        $sqlola = mysqli_query($conexao,"SELECT * FROM localizacao_obra");

                        while ($rows = mysqli_fetch_assoc($sqlola)) {
                            // code...
                     

                         ?>
                <option value="<?php echo $rows['localizacao_obra']; ?>"><?php echo $rows['localizacao_obra']; ?></option>
                            <?php  } ?>
                        </select>
                          
                    </div>
					</div>

					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Data de Incio</span>
					</label>
					<span class="input-text">
						<input type="hidden" value="<?php echo $id_user; ?>" name="id_user">
						<input data-input="" id="data_inicio" class="form-control OSFillParent" type="date" min="<?php echo date('Y-m-d') ?>"  maxlength="250" name="datai"  wfd-id="id3"></span>
					</div>
					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Data Final</span>
					</label>
					<span class="input-text">
						<input data-input="" id="data_final" class="form-control OSFillParent" type="date"  maxlength="250" name="dataf" min="<?php echo date('Y-m-d') ?>"  wfd-id="id3"></span>
					</div>

					<div data-container="">
						<label data-label="" class="OSFillParent" for="TextArea_Description">
							<span style="font-weight: bold;">Descrição</span>
						</label>
						<span>
							<textarea name="descricao" required data-textarea="" class="form-control OSFillParent" rows="3" maxlength="500" id="TextArea_Description"></textarea>
						</span>
					</div>
					<div data-container="">
						<label data-label="" class="OSFillParent" for="Checkbox2">
							<span style="font-weight: bold;">Ativo</span>
						</label>
						<span>
							<input data-checkbox="" class="checkbox" type="checkbox" id="Checkbox2" wfd-id="id4">
						</span>
						</div>
						<div data-container="" style="margin-top: 20px;">
							<button data-button="" class="btn btn-secondary float-right ThemeGrid_MarginGutter w-100" type="button" onclick="history.back();">Voltar</button>
						<button data-button="" name="butao" class="btn btn-primary ThemeGrid_MarginGutter" type="submit">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<footer data-advancedhtml="" role="contentinfo" class="content-bottom">
			<div class="footer ph" id="b1-Bottom">
				<div data-block="Common.BottomBar" class="OSBlockWidget" id="$b3">
					<div data-container="" class="bottom-bar-wrapper">
						<div data-container="" class="bottom-bar ph text-center" style="background-color: white; color: black;">
							<p style="color: black; font-weight: bold;">&copy; <?php echo date("Y"); ?> All rights reserved. Versão 2.0</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div data-container="" class="offline-data-sync">
		<div data-block="Common.OfflineDataSyncEvents" class="OSBlockWidget" id="b1-$b2">
			<div data-block="Private.OfflineDataSyncCore" class="OSBlockWidget" id="b1-b2-$b1">
				<div data-block="Private.NetworkStatusChanged" class="OSBlockWidget" id="b1-b2-b1-$b1">
					<div data-container=""></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>


<script src="../js/data.js"></script>  
<script src="../js/menusub.js"></script>      
</body>
</html>