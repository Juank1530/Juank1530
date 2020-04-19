# You'll need to install PyJWT via pip 'pip install PyJWT' or your project packages file

import jwt
import time

METABASE_SITE_URL = "http://192.168.10.192:3000"
METABASE_SECRET_KEY = "456d8d6804176624d77e272057a78dfdc3ba8fccbce04bf519679d2518d226ae"

payload = {
  "resource": {"question": 174},
  "params": {
    
  },
  #"exp": round(time.time()) + (60 * 10) # 10 minute expiration
}
token = jwt.encode(payload, METABASE_SECRET_KEY, algorithm="HS256")

iframeUrl = METABASE_SITE_URL + "/embed/question/" + token.decode("utf8") + "#bordered=true&titled=true"

print(iframeUrl)