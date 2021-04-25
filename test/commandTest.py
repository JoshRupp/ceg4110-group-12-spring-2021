import command


def test_monster():
    results = command.monster("Aptonoth")
    assert(results is not None)
    print(results)
