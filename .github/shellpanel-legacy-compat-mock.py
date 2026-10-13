from http.server import BaseHTTPRequestHandler, HTTPServer

class Handler(BaseHTTPRequestHandler):
    def log_message(self, *args):
        pass

    def do_GET(self):
        self.send_response(410)
        self.end_headers()

    def do_POST(self):
        self.send_response(410)
        self.end_headers()

HTTPServer(("127.0.0.1", 18080), Handler).serve_forever()
