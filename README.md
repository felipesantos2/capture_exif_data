
# EXIF

## Exchangeable image file format (EXIF)

Aqui temos um lab construído por volta do ecossistema PHP e Laravel, onde vamos analisar e visualizar meta-informações de arquivos de imagem

`Na primeira rodada vamos explorar essas duas extenções:`

- PNG
- JPG

---

### Stack
```json
    "php": "^8.3",
    "laravel/framework": "^13.17",
    "laravel/tinker": "^3.0",
    "livewire/livewire": "^4.4",
    "robsontenorio/mary": "^2.9"
``` 

--

Inicialmente, temos um comando artisan e uma service para trabalhar com essa captura inicial.

- `ExifOfFile.php`
- `ExifService.php`
