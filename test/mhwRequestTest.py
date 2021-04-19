import mhwRequest


def test_get_all():
    results = mhwRequest.get_all("monsters")
    assert(len(results) > 0)


def test_get_id():
    results = mhwRequest.get_id("monsters", "2")
    assert(len(results) > 0)
    assert(results["name"] == "Jagras")


def test_get_name():
    results = mhwRequest.get_name("monsters", "gaj")
    assert(len(results) > 0)
    assert(results[0]["name"] == "Gajau")
