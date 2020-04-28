# You'll need to install PyJWT via pip 'pip install PyJWT' or your project packages file

import jwt
import time

METABASE_SITE_URL = "http://190.61.25.48:3000"
METABASE_SECRET_KEY = "315bea17cb8b8173934e236a6fedf7e4cf2c6c67600a4105ae098dc28942d28d"

payload = {
  "resource": {"dashboard": 38},
  "params": {
    
  },
  #"exp": round(time.time()) + (60 * 10) # 10 minute expiration
}
token = jwt.encode(payload, METABASE_SECRET_KEY, algorithm="HS256")

iframeUrl = METABASE_SITE_URL + "/embed/dashboard/" + token.decode("utf8") + "#theme=night&bordered=true&titled=true"
print(iframeUrl)