import requests
import urllib.request
import mechanicalsoup
from bs4 import BeautifulSoup


from http.cookiejar import CookieJar

#query='https://www.goibibo.com/hotels/find-hotels-in-Bangalore/6771549831164675055/6771549831164675055/%7B%22ci%22:%2220170310%22,%22co%22:%2220170311%22,%22r%22:%221-1_0%22%7D/?{}&sec=dom'
#r=requests.get('https://www.goibibo.com/hotels/find-hotels-in-Bangalore/6771549831164675055/6771549831164675055/')
query='https://hermes.goibibo.com/hotels/v2/search/data/v3/2820046943342890302/20170315/20170316/1-1_0?s=popularity&cur=INR&f={}&pid=1'

r=requests.get(query)


soup=BeautifulSoup(r.content,"html.parser")
print(soup.prettify())
