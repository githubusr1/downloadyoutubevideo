#!/usr/bin/env python                                                                                                         
# -*- coding: utf-8 -*-

import sys
import urllib
import urllib2
from bs4 import BeautifulSoup

textToSearch = 'hello world'
query = urllib.quote(textToSearch)
url = "https://www.youtube.com/results?search_query=" + query
response = urllib2.urlopen(url)
html = response.read()
soup = BeautifulSoup(html,"html5lib")
print "hello world"
print sys.argv[0]
print sys.argv[1]
print sys.argv[2]

