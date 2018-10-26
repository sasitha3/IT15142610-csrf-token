from flask import Flask
from flask import Blueprint
from flask_restful import Api
from resources.csrf_resource import Csrf_store, Csrf_get

csrf_blueprint = Blueprint('csrf', __name__)
model_blueprint_api = Api(csrf_blueprint)

model_blueprint_api.add_resource(Csrf_store, '/csrf', methods = ['POST'])
model_blueprint_api.add_resource(Csrf_get, '/check_csrf', methods = ['POST'])
