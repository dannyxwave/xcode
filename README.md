# xcode

Static site for [xcode.no](https://xcode.no) – plain HTML/CSS, no build step.

## Projects
- [Sumify](https://numflow-sumsum.web.app)
- [NumFlow](https://numflow.app)
- [Tesla Referral App](https://teslainvite.com)
- [Car Loan Calculator](https://bil.xcode.no/)
- [Browser Info](https://ip.xcode.no/)
- [URL Shortener](https://url.xcode.no/)
- [Apple to Google Maps](https://maps.xcode.no/)
- [Go | Upload](https://go.xcode.no/)
- [AvoDo | Todo](https://todo.xcode.no/)
- [Sukkersjekk](https://sukkersjekk.xcode.no/)
- [Bigwwwave](https://bigwwwave.xcode.no/)
- [Calendar Converter](https://cal.xcode.no/)

## Run locally
Serve the folder over http (opening `index.html` as a file blocks the fonts and the manifest):

`python3 -m http.server 8080` or `npx live-server`

## Deploy
Push to `master` – Cloudflare Pages (not GitHub Pages) deploys automatically.

## Notes
- Images in `img/` are WebP and cached for a week (`_headers`). Use a new filename when replacing an image.
- `img/calendar.webp` is the spiral calendar from [Microsoft Fluent Emoji](https://github.com/microsoft/fluentui-emoji) (MIT).
- Fonts are self-hosted in `fonts/` (WOFF2). Apple browsers use the system font instead.
- `www.xcode.no` → `xcode.no` is a Redirect Rule in the Cloudflare dashboard, not in this repo.
