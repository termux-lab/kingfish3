import requests, sys, os
_phone = sys.argv[1]
if _phone[0] == '+':
	_phone = _phone[1:]
if _phone[0] == '8':
	_phone = '7'+_phone[1:]
if _phone[0] == '9':
	_phone = '7'+_phone

while True:
	requests.post("https://www.ozon.ru/api/composer-api.bx/_action/fastEntry", json={"phone": _phone, "otpId": 0})
	break
