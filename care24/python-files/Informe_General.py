# You'll need to install PyJWT via pip 'pip install PyJWT' or your project packages file

import jwt
import time

METABASE_SITE_URL = "http://192.168.10.192:3000"
METABASE_SECRET_KEY = "96956840ce73c4623d3e2f3f66c58f88c91be0562e19c4d10b963260f26d3854"

payload = {
  "resource": {"dashboard": 1},
  "params": {
    
  },
  #"exp": round(time.time()) + (60 * 10) # 10 minute expiration
}
token = jwt.encode(payload, METABASE_SECRET_KEY, algorithm="HS256")

iframeUrl = METABASE_SITE_URL + "/embed/dashboard/" + token.decode("utf8") + "#theme=night&bordered=true&titled=true"