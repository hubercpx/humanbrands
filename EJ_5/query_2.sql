--b. Se requiere desarrollar un query que consulte el artículo más vendido por año y la
--cantidad de unidades que fueron despachadas.
SELECT producto.nombre, MAX(SUM(detalle.cantidad_vendida))
FROM orden
INNER JOIN detalle ON orden.ORDEN_ID = detalle.ORDEN_ID
INNER JOIN producto ON detalle.producto_id = producto.id
WHERE TO_CHAR(orden.fecha,'YYYY') = '2020'
GROUP BY producto.nombre