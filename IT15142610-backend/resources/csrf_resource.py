from flask_restful import Resource
from tornado.escape import json_encode
from flask import jsonify
from flask import json
from flask import request
import json
import uuid

global streetno
streetno = {}
class Csrf_store(Resource):
    def post(self):
        data = request.json
        print(data)
        session_id = data['session_id']
        token = uuid.uuid4().hex
        streetno.update({session_id:token})
        return {'token':token}

class Csrf_get(Resource):
    def post(self):
        data = request.json
        session_id = data['session_id']
        user_token = data['token']
        try:
            token = streetno[session_id]
            if token == user_token:
                result = True
            else:
                result = False
        except:
            return {'token':'not found'} 
        return {'result':result}

