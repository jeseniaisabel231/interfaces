<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!--HEADER------------------------------------------------------------------------------------------------------------- -->
    <?php
    include '../HEADER/header.php';?>
    <div>
        <img class="img-1" src="../img/fondo1.png" alt="Tarjeta Grafica">
    </div>

    <!--HOME-------------------------------- -->
    <main>
        <!--CATEGORIAS--------------------------------------------------------------------------------------------------------- -->
        <section class="categories">
            <div class="categories-contenedor">
                <h2 class="h2_categorias">Categorias</h2>
                <div class="grupo-categorias">
                    <div class="categoria_1">
                        <div class="img_categorias">
                            <img src="../img/categoria1.png" alt="">
                        </div>
                        <div class="contenedor-h3">
                            <h3 class="h3_categorias">Hadware</h3>
                        </div>
                    </div>
    
                    <div class="categoria_1">
                        <div class="img_categorias">
                            <img src="../img/categoria_2.png" alt="">
                        </div>
                        <div class="contenedor-h3">
                            <h3 class="h3_categorias">Perifericos</h3>
                        </div>
                    </div>
    
                    <div class="categoria_1">
                        <div class="img_categorias">
                            <img src="../img/categoria_3.png" alt="">
                        </div>
                        <div class="contenedor-h3">
                            <h3 class="h3_categorias">Monitores</h3>
                        </div>
                    </div>
    
                    <div class="categoria_1">
                        <div class="img_categorias">
                            <img src="../img/categoria_4.png" alt="">
                        </div>
                        <div class="contenedor-h3">
                            <h3 class="h3_categorias">Laptops</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TRABAJAMOS CON-------------------------------------------------------------------------------------------------- -->
        <section class="trabajamos_con">
            <h2 class="h2_trabajamos">Trabajamos con:</h2>
            <div class="contenedor-marcas">
                <img src="../img/marca_1.png" alt="">
                <img src="../img/marca_2.png" alt="">
                <img src="../img/marca_3.png" alt="">
                <img src="../img/marca_4.png" alt="">
            </div>
        </section>
        <!--PRODCUTOS NUEVOS------------------------------------------------------------------------------------------------------>
        <section class="productos_nuevos">
            <div class="contenedor-principal">
                <h2 class="h2_productos">Productos Nuevos</h2>
                <div class="contenedor-productos">
                    <div class="producto_1">
                        <div class="img_producto">
                            <img src="../img/producto_1.png" alt="">
                        </div><hr>
                        <div class="descripcion_producto">
                            <p class="codigo">SKU:PC42788</p><br>
                            <p class="nombre">PC GAMER</p><br>
                            <p class="precio">$ 904.32</p>

                            <input class="cantidad" type="number">
                            
                            <button class="compras" href=""><svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group 39">
                                <path id="Vector" d="M7.94084 21.7019C8.91542 21.7019 9.70548 20.8922 9.70548 19.8934C9.70548 18.8946 8.91542 18.0849 7.94084 18.0849C6.96626 18.0849 6.17621 18.8946 6.17621 19.8934C6.17621 20.8922 6.96626 21.7019 7.94084 21.7019Z" fill="white"/>
                                <path id="Vector_2" d="M20.2932 21.7019C21.2678 21.7019 22.0578 20.8922 22.0578 19.8934C22.0578 18.8946 21.2678 18.0849 20.2932 18.0849C19.3186 18.0849 18.5286 18.8946 18.5286 19.8934C18.5286 20.8922 19.3186 21.7019 20.2932 21.7019Z" fill="white"/>
                                <path id="Vector_3" d="M7.48756 13.5637H21.8991L24.0167 2.71273H5.6187L5.15163 0H0V1.80849H3.67154L6.31849 17.1806H22.0579V15.3722H7.79858L7.48756 13.5637Z" fill="white"/>
                                </g>
                                </svg><span>Anadir al carrito</span>
                            </button>
                        </div>
                        
                    </div>
    
                    <div class="producto_1">
                        <div class="img_producto">
                            <img src="../img/producto_2.png" alt="">
                        </div><hr>
                        <div class="descripcion_producto">
                            <p class="codigo">SKU:PC42788</p><br>
                            <p class="nombre">PCGAMER</p><br>
                            <p class="precio">$ 904.32</p>

                            <input class="cantidad" type="number">
                            
                            <button class="compras"href=""><svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group 39">
                                <path id="Vector" d="M7.94084 21.7019C8.91542 21.7019 9.70548 20.8922 9.70548 19.8934C9.70548 18.8946 8.91542 18.0849 7.94084 18.0849C6.96626 18.0849 6.17621 18.8946 6.17621 19.8934C6.17621 20.8922 6.96626 21.7019 7.94084 21.7019Z" fill="white"/>
                                <path id="Vector_2" d="M20.2932 21.7019C21.2678 21.7019 22.0578 20.8922 22.0578 19.8934C22.0578 18.8946 21.2678 18.0849 20.2932 18.0849C19.3186 18.0849 18.5286 18.8946 18.5286 19.8934C18.5286 20.8922 19.3186 21.7019 20.2932 21.7019Z" fill="white"/>
                                <path id="Vector_3" d="M7.48756 13.5637H21.8991L24.0167 2.71273H5.6187L5.15163 0H0V1.80849H3.67154L6.31849 17.1806H22.0579V15.3722H7.79858L7.48756 13.5637Z" fill="white"/>
                                </g>
                                </svg><span>Anadir al carrito</span>
                            </button>
                        </div>
                        
                    </div>
    
                    <div class="producto_1">
                        <div class="img_producto">
                            <img src="../img/producto_3.png" alt="">
                        </div><hr>
                        <div class="descripcion_producto">
                            <p class="codigo">SKU:PC42788</p><br>
                            <p class="nombre">PCGAMER</p><br>
                            <p class="precio">$ 904.32</p>

                            <input class="cantidad" type="number">
                            
                            <button class="compras" href=""><svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group 39">
                                <path id="Vector" d="M7.94084 21.7019C8.91542 21.7019 9.70548 20.8922 9.70548 19.8934C9.70548 18.8946 8.91542 18.0849 7.94084 18.0849C6.96626 18.0849 6.17621 18.8946 6.17621 19.8934C6.17621 20.8922 6.96626 21.7019 7.94084 21.7019Z" fill="white"/>
                                <path id="Vector_2" d="M20.2932 21.7019C21.2678 21.7019 22.0578 20.8922 22.0578 19.8934C22.0578 18.8946 21.2678 18.0849 20.2932 18.0849C19.3186 18.0849 18.5286 18.8946 18.5286 19.8934C18.5286 20.8922 19.3186 21.7019 20.2932 21.7019Z" fill="white"/>
                                <path id="Vector_3" d="M7.48756 13.5637H21.8991L24.0167 2.71273H5.6187L5.15163 0H0V1.80849H3.67154L6.31849 17.1806H22.0579V15.3722H7.79858L7.48756 13.5637Z" fill="white"/>
                                </g>
                                </svg><span>Anadir al carrito</span>
                            </button>
                        </div>
                        
                    </div>
    
                    <div class="producto_1">
                        <div class="img_producto">
                            <img src="../img/producto_4.png" alt="">
                        </div><hr>
                        <div class="descripcion_producto">
                            <p class="codigo">SKU:PC42788</p><br>
                            <p class="nombre">PCGAMER</p><br>
                            <p class="precio">$ 904.32</p>

                            <input class="cantidad" type="number">
                            
                            <button class="compras" href=""><svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Group 39">
                                <path id="Vector" d="M7.94084 21.7019C8.91542 21.7019 9.70548 20.8922 9.70548 19.8934C9.70548 18.8946 8.91542 18.0849 7.94084 18.0849C6.96626 18.0849 6.17621 18.8946 6.17621 19.8934C6.17621 20.8922 6.96626 21.7019 7.94084 21.7019Z" fill="white"/>
                                <path id="Vector_2" d="M20.2932 21.7019C21.2678 21.7019 22.0578 20.8922 22.0578 19.8934C22.0578 18.8946 21.2678 18.0849 20.2932 18.0849C19.3186 18.0849 18.5286 18.8946 18.5286 19.8934C18.5286 20.8922 19.3186 21.7019 20.2932 21.7019Z" fill="white"/>
                                <path id="Vector_3" d="M7.48756 13.5637H21.8991L24.0167 2.71273H5.6187L5.15163 0H0V1.80849H3.67154L6.31849 17.1806H22.0579V15.3722H7.79858L7.48756 13.5637Z" fill="white"/>
                                </g>
                                </svg><span>Anadir al carrito</span>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--FOOTER------------------------------------------------------------------------------------------------------------- -->
    <?php
    include '../FOOTER/footer.php';?>
    
    <script src="pagina1.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>