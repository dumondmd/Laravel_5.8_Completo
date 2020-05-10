# Laravel Udemy
## Curso laravel

Curso de Laravel cadastro

# Instruções pacotes node_modules

Instale com *npm install NOME*

## Instalando Jquery 
npm install jquery


## Instalando Bootstrap 
npm install bootstrap

## Configurando webpack.mix.js

No **webpack.mix.js** coloque *npm run dev*

```
mix
	.sass('resources/views/scss/style.scss', 'public/site/style.css')
	.scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
	.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');	
```

