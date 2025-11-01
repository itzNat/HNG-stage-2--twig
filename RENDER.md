Render deployment instructions

This repository is prepared to be deployed to Render using Docker. The repository includes a `Dockerfile` which uses PHP's built-in web server to serve the `public/` directory on the port provided by Render via the `PORT` environment variable.

Quick steps (recommended):

1. Push this repository to GitHub (or your git provider) and connect it in Render.
2. If you use the `render.yaml` file, Render will attempt to create a `web` service named `stage2-twig` configured to build your Dockerfile on branch `main`.

Manual setup on Render (if not using `render.yaml`):
- Create a new "Web Service" and set the environment to "Docker".
- Point to your repository and branch `main`.
- Set the Dockerfile path to `Dockerfile` in the repository root.
- Render sets the `PORT` environment variable for your service; the Dockerfile's CMD uses that to start PHP's built-in server.

Local testing with Docker (Windows PowerShell):

# build the image
docker build -t stage2-twig .

# run locally (maps Render's $PORT - default 10000) and map to host port 10000
docker run --rm -p 10000:10000 -e PORT=10000 stage2-twig

Then open http://localhost:10000

Notes and recommendations:
- The Dockerfile attempts to run `composer install` if `composer.json` is present. If your CI or Render prevents network installs, the repository's `vendor/` directory can be used instead (it exists in this repo).
- If you prefer Apache or Nginx instead of PHP built-in server, the Dockerfile can be adjusted to use `php:8.1-apache` and configure Apache to listen on `$PORT` (more advanced).
- Add any Render environment variables (APP_ENV, DB credentials) in the Render dashboard or `render.yaml` as needed.
