
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

### Subindo a Aplicação: **Docker ENV**

1 - Criar nosso `.env` com as configurações do banco

2 - Baixar as dependências do composer, nossa `/vendor`.

```bash

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    composer/composer:latest \
    composer install --ignore-platform-req=ext-intl

```

3 - Executar os comandos para subir os containers:

```bash

vendor/bin/sail up
ou
vendor/bin/sail up -d

```

4 - Verificar se o App está rodando na porta `80`

`http://localhost:80`

---

Vamos trocar uma ideia no LinkedIn:

[LinkedIn](https://www.linkedin.com/in/felipepinheiro2/)

---

#### *ACESSO RÁPIDO DAS PRINCIPAIS DOCS*

[https://livewire.laravel.com](https://livewire.laravel.com)

[https://laravel.com](https://laravel.com)

[https://mary-ui.com/](https://mary-ui.com)
