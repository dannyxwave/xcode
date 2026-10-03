# xcode

Static site for [xcode.no](https://xcode.no) – plain HTML/CSS, no build step.

## Run locally
Serve the folder over http (opening `index.html` as a file blocks the fonts and the manifest):

`python3 -m http.server 8080` or `npx live-server`

## Deploy
Push to `master` – Cloudflare Pages (not GitHub Pages) deploys automatically.

## Notes
- Images in `img/` are WebP and cached for a week (`_headers`). Use a new filename when replacing an image.
- Fonts are self-hosted in `fonts/` (WOFF2). Apple browsers use the system font instead.
- `www.xcode.no` → `xcode.no` is a Redirect Rule in the Cloudflare dashboard, not in this repo.
