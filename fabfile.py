from fabric.api import local

def commit():
    local('git add -p && git commit')

def push():
    local('git push')

def update_repo():
    commit()
    push()







